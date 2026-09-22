<?php

use App\Models\Menu\Menu;
use App\Models\Menu\Submenu;
use App\Models\WebSetting\Setting;

if (!function_exists('getHeaderMenus')) {
    function getHeaderMenus()
    {
        $menus = Menu::all();
        return $menus->map(function ($menu) {
            $menu->submenus = Submenu::where('menu-slug', $menu->slug)->get();
            return $menu;
        });
    }
}


if (!function_exists('getwebsetting')) {
    function getwebsetting()
    {
        // Table ka pehla record fetch karega (agar data nahi hai toh null return karega)
        return Setting::first();
    }
}