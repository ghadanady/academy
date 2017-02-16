<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\CourseCategory;
use App\Instructor;
use App\Course;
use App\Member;

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
            'categories'=> CourseCategory::where('active','1')->get(),
            'articlecategories'=> Category::where('active','1')->get(),
            'instructores'=> Instructor::where('active','1')->get(),
            'count_cources'=> count(Course::Active()->get()),
            'count_instructor'=> count(Instructor::Active()->get()),
            'count_member'=> count(Member::Active()->get()),


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
