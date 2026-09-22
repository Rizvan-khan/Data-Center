<?php

use App\Models\Menu\Menu;
use App\Models\Menu\Submenu;

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