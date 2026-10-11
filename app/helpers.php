<?php

use App\Models\Menu\Menu;
use App\Models\Menu\Submenu;
use App\Models\WebSetting\Setting;

if (!function_exists('getHeaderMenus')) {
    function getHeaderMenus()
    {
        return Menu::where('status', 1)->orderBy('position')->orderBy('id')
            ->with(['categories', 'submenus' => fn ($query) => $query->where('status', 1)
                ->whereNotExists(fn ($hidden) => $hidden->selectRaw('1')->from('menu_categories')
                    ->whereColumn('menu_categories.menu_slug','submenus.menu-slug')
                    ->whereColumn('menu_categories.name','submenus.category')->where('menu_categories.is_active',false))
                ->orderBy('position')->orderBy('id')])
            ->get();
    }
}


if (!function_exists('getwebsetting')) {
    function getwebsetting()
    {
        // Table ka pehla record fetch karega (agar data nahi hai toh null return karega)
        return Setting::first();
    }
}
