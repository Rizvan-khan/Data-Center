<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu\Menu;
use App\Models\WebSetting\Setting;
use Illuminate\Http\Request;

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

public function setting()
    {
        $setting = Setting::first();
        return view('admin.setting', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::first() ?? new Setting();

        // Single Text Fields Update
        $setting->title        = $request->input('title');
        $setting->email        = $request->input('email');
        $setting->mobile       = $request->input('mobile');
        $setting->whatsapp     = $request->input('whatsapp');
        $setting->address      = $request->input('address');
        $setting->keywords     = $request->input('keywords');
        $setting->description  = $request->input('description');
        $setting->map          = $request->input('map');
        $setting->facebook     = $request->input('facebook');
        $setting->twitter      = $request->input('twitter');
        $setting->instagram    = $request->input('instagram');
        $setting->city         = $request->input('city');
        $setting->state        = $request->input('state');
        $setting->pincode      = $request->input('pincode');
        $setting->country      = $request->input('country');

        // Logo Upload Management
        if ($request->hasFile('logo')) {
            $logoFile = $request->file('logo');
            $logoName = time() . '_logo.' . $logoFile->getClientOriginalExtension();
            $logoFile->move(public_path('upload/logo'), $logoName);
            $setting->logo = $logoName;
        }

        // Favicon Upload Management
        if ($request->hasFile('favicon')) {
            $favFile = $request->file('favicon');
            $favName = time() . '_favicon.' . $favFile->getClientOriginalExtension();
            $favFile->move(public_path('upload/favicon'), $favName);
            $setting->favicon = $favName;
        }

        $setting->save();

        return redirect()->back()->with('success', 'Home Settings updated successfully!');
    }


}
