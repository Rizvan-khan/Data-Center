<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu\Menu;

// use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function Add()
    {

        $menu = Menu::all();

        return view('admin.menu.addmenu', compact('menu'));
    }

      public function Submenu()
    {

        $menu = Menu::all();

        return view('admin.menu.addsubmenu', compact('menu'));
    }
}
