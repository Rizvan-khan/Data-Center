<?php

namespace App\Providers;

use App\Models\Plan\Page;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       // Target ONLY the specific pricing view template
        View::composer('DataCenter.price', function ($view) {
            
            $slug = request()->segment(1) ?? 'cloud-migration';

            $pageData = Page::with(['plans', 'plan_headings'])
                            ->where('slug', $slug)
                            ->first();

            $view->with('page', $pageData);
        });
    }
}
