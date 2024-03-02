<?php

namespace App\Providers;
use App\Http\View\Composers\NavigationComposer;
use App\Models\Country;
use App\Models\Course;
use App\Models\Trainers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {

    }


    public function boot()
    {
        Paginator::useBootstrapFive();
        View::share('share_courses',Course::take(10)->get());
        View::share('share_trainers',Trainers::take(10)->get());
        View::share('countries',Country::orderBy('country','asc')->get());
    }

}
