<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Hub;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
//        View::share('hubs', Hub::all());
//        View::share('articles', Article::all());
    }
}
