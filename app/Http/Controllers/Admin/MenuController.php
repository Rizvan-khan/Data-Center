<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu\Menu;
use App\Models\Menu\Submenu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{

    public function createmenu(Request $request)
    {
        $request->validate([
            'menu' => 'required|string|max:255',
            'sub_menu' => 'nullable|string', // Agar form se sub_menu status/name aa raha ho
        ]);

        // 2. Menu Save karna
        $menu = new Menu();
        $menu->name = $request->menu;
        $menu->submenu = $request->sub_menu; // Status ya preference
        $menu->status = $request->status ?? 1;
        $menu->position = $request->position ?? 0;
        $menu->slug = Str::slug($request->menu); // 'My Menu' -> 'my-menu'
        $menu->save();
        try {

            return redirect()->back()->with('success', 'Menu successfully create ');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'went wrong anytihing: ' . $e->getMessage());
        }
    }



public function storeSubmenu(Request $request)
{
    $request->validate([
        'menuslug'    => 'required',
        'submenu'     => 'required|string|max:255',
        'description' => 'required|string',
        'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        // Automatically generates a unique filename & stores in storage/app/public/submenus
        $imagePath = $request->file('image')->store('submenus', 'public');
    }

    Submenu::create([
        'menu-slug'    => $request->menuslug,
        'submenu'      => $request->submenu,
        'description'  => $request->description,
        'image'        => $imagePath,
        'status'       => 1,
        'submenu-slug' => Str::slug($request->submenu),
    ]);

    return redirect()->back()->with('success', 'Submenu added successfully!');
}


}
