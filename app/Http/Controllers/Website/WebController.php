<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Plan\Page;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function cloudMigration()
    {
        return view('DataCenter.cloud-migration');
    }

   
public function showPlan($slug)
    {
        return view('DataCenter.price');
    }

       
public function deleteplan()
    {
        return view('DataCenter.price');
    }


}
