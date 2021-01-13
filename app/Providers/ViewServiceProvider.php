<?php

namespace App\Providers;
use App\Models\User;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['agent_sanitaires.fields'], function ($view) {
            $userItems = User::pluck('name','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['agents.fields'], function ($view) {
            $userItems = User::pluck('name',' id')->toArray();
            $view->with('userItems', $userItems);
        });
      
        //
    }
}