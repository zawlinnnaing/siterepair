<?php

namespace App\Providers;

use App\Department;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewShareServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    protected $defer = true;

    public function boot()
    {
        //
//        $dep = Department::all();
//        error_reporting(E_ALL ^ E_NOTICE);
//        View::share('departments',$dep);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
