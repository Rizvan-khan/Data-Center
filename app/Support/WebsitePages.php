<?php

namespace App\Support;

use App\Models\Menu\Menu;
use App\Models\Menu\Submenu;
use App\Models\Plan\Page;
use Illuminate\Support\Facades\Route;

class WebsitePages
{
    public static function all(): array
    {
        $pages = ['/' => 'Home'];
        foreach (Route::getRoutes() as $route) {
            $path = trim($route->uri(), '/');
            if (!$path || str_contains($path, '{') || str_starts_with($path, 'admin') || !in_array('GET', $route->methods()) || in_array($path, ['up','login','register','forgot-password','account']) || str_starts_with($path, 'storage')) continue;
            $pages[$path] = ucwords(str_replace('-', ' ', $path));
        }
        foreach (Menu::all() as $menu) self::add($pages, $menu->url, $menu->name);
        foreach (Submenu::all() as $item) self::add($pages, $item->{'submenu-slug'}, $item->submenu);
        foreach (Page::all() as $page) self::add($pages, $page->slug, $page->page_title ?: $page->slug);
        foreach (config('business_services', []) as $services) {
            foreach ($services as $service) $pages[$service[0]] = $service[1];
        }
        $pages['business-services'] = 'Business Solutions';
        $pages['about-us'] = 'About Us';
        $pages['contact'] = 'Contact Us';
        asort($pages, SORT_NATURAL | SORT_FLAG_CASE);
        return $pages;
    }

    private static function add(array &$pages, ?string $url, string $name): void
    {
        $path = trim(explode('?', explode('#', $url ?? '')[0])[0], '/');
        if (in_array($path, ['login','register','forgot-password','account']) || (str_contains($url ?? '', '#') && isset($pages[$path]))) return;
        if ($path && preg_match('/^[a-zA-Z0-9_-]+(?:\/[a-zA-Z0-9_-]+)*$/', $path) && !str_starts_with($path, 'admin')) $pages[$path] = $name;
    }
}
