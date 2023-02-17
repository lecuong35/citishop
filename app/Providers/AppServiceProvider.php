<?php

namespace App\Providers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Kind;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
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
        Paginator::useBootstrap();
        $user = Auth::user();

        $kind = Kind::all();
        $catego = array();
        $logo = "https://firebasestorage.googleapis.com/v0/b/citishop-laravel.appspot.com/o/Images%2Fcitishop.png?alt=media&token=9b84870d-1d93-4eed-bfbd-769c7b74597e";
        foreach($kind as $ki) {
            array_push($catego, $ki->category);
        }
       View::share('kindOfAll', $kind);
       View::share('user', $user);
       View::share('cate', $catego);
       View::share('logo', $logo);
    }
}
