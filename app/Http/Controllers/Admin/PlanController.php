<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan\Page;
use App\Models\Plan\Plan;
use App\Models\Plan\Plan_heading;
use Exception;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function create()
    {
         $pagess = Page::all(); 
        return view('admin.plan.create-plan',compact('pagess'));
    }

     public function planHeading()
    {
        $pages = Page::all(); 
    
    return view('admin.plan.create-plan-heading', compact('pages'));
    }

public function storeheading(Request $request)
{
    // 1. Form Validation (page_id update kiya gaya hai)
    $request->validate([
        'page_id'   => 'required|exists:pages,id', // Checks if page_id exists in pages table
        'heading'   => 'required|string|max:255',
        'paragraph' => 'nullable|string',
        'status'    => 'required|boolean',
    ]);

    try {
        // 2. Data Insertion using Model
        Plan_heading::create([
            'page_id'     => $request->page_id,
            'heading'     => $request->heading,
            'description' => $request->paragraph,
            'status'      => $request->status ?? 1,
        ]);

        return redirect()->back()->with('success', 'Plan Heading added successfully!');

    } catch (Exception $e) {
        return redirect()->back()->withInput()->with('error', 'Failed to save heading: ' . $e->getMessage());
    }
}


    public function store(Request $request)
    {
        // 1. Validation me 'description' add kiya gaya hai
        $validatedData = $request->validate([
            'page_id'   => 'required|exists:pages,id',
            'plan_title'        => 'required|string|max:255',
            'plan_type'         => 'nullable|string|max:255',
            'page_url'          => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'description'       => 'nullable|string', // CKEditor Content Field
            'price_mothly'      => 'nullable|numeric|min:0',
            'renew_price'       => 'nullable|numeric|min:0',
            'discount_mothly'   => 'nullable|numeric|min:0',
            'price_yearly'      => 'nullable|numeric|min:0',
            'renew_yearly'      => 'nullable|numeric|min:0',
            'discount_yearly'   => 'nullable|numeric|min:0',
            'status'            => 'required|boolean',
        ]);

        try {
            // 2. Database Insert
            Plan::create($validatedData);

            return redirect()->back()->with('success', 'Plan created successfully!');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Failed to create plan: ' . $e->getMessage());
        }
    }
}
