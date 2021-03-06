<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // register components
        Blade::component('components.blog.header', 'header');
        Blade::component('components.blog.slider', 'slider');
        Blade::component('components.blog.slidenext', 'slidenext');
        Blade::component('components.blog.similar', 'similar');
        Blade::component('components.blog.imgcard', 'imgcard');
        Blade::component('components.blog.smbgcard', 'smbgcard');
        Blade::component('components.blog.smcard', 'smcard');
        Blade::component('components.blog.defcard', 'defcard');
        Blade::component('components.blog.post_preview', 'postprev');
        Blade::component('components.alert', 'alert');
    }
}
