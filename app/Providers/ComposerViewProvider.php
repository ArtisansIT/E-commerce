<?php

namespace App\Providers;

use App\Http\View\Composers\BrandComposer;
use App\Http\View\Composers\CategoryComposer;
use App\Http\View\Composers\ColorComposer;
use App\Http\View\Composers\SidebarComposer;
use App\Http\View\Composers\SizeComposer;
use App\Http\View\Composers\SubCategoryComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerViewProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer([
            'admin.category.home',
            'admin.category.softdelete',
            'admin.sub_category.create',
            'admin.sub_category.update',
            'frontend.include.header'
        ], CategoryComposer::class);
        View::composer([
            'admin.sub_category.home',
            'admin.sub_category.softdelete',
            
        ], SubCategoryComposer::class);

        View::composer([
            'admin.brand.home',
            'admin.brand.softdelete',
            
        ],BrandComposer::class);
        View::composer([
            'admin.color.home',
            'admin.color.softdelete',
            
        ],ColorComposer::class);
        View::composer([
            'admin.size.home',
            'admin.size.softdelete',
            
        ],SizeComposer::class);

        View::composer(['frontend.include.header'], SidebarComposer::class);

    }
}
