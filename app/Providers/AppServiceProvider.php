<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\Useful_link;
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
        $sett = Setting::find(1);
        $useful_links = Useful_link::all();
        View::share([
            'sett'=>$sett,
            'useful_links'=>$useful_links
        ]);
    }
}
