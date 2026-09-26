<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Plan\Page;
use Illuminate\Http\Request;

class WebController extends Controller
{



// company page


public function AboutUs()
    {
        return view('DataCenter.about-us');
    }

    public function ContactUs()
    {
        return view('DataCenter.contact-us');
    }

// sevices pages


    public function cloudMigration()
    {
        return view('DataCenter.cloud-migration');
    }

    public function VPSHoting()
    {
        return view('DataCenter.vps-hosting');
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
