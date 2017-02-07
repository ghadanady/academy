<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Instructor;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->share([
            'categories'=> Category::where('active','1')->get(),
            'instructores'=> Instructor::where('active','1')->get(),
            ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\I18N_Arabic::class , function ()
        {
            $Arabic = new \I18N_Arabic('Date');
            $Arabic->setMode(3);
            return $Arabic; 
        });   
    }
}
