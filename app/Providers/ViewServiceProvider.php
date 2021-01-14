<?php

namespace App\Providers;
use App\Models\Symptome;
use App\Models\Agent;
use App\Models\Consultation;
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
        View::composer(['cas_infectedds.fields'], function ($view) {
            $symptomeItems = Symptome::pluck('name',' id')->toArray();
            $view->with('symptomeItems', $symptomeItems);
        });
        View::composer(['cas_infectedds.fields'], function ($view) {
            $agentItems = Agent::pluck('name',' id')->toArray();
            $view->with('agentItems', $agentItems);
        });
        View::composer(['cas_infectedds.fields'], function ($view) {
            $userItems = User::pluck('name',' id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['cas_infectes.fields'], function ($view) {
            $symptomeItems = Symptome::pluck('name',' id')->toArray();
            $view->with('symptomeItems', $symptomeItems);
        });
        View::composer(['cas_infectes.fields'], function ($view) {
            $agentItems = Agent::pluck('name',' id')->toArray();
            $view->with('agentItems', $agentItems);
        });
        View::composer(['cas_infectes.fields'], function ($view) {
            $userItems = User::pluck('name',' id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $symptomeItems = Symptome::pluck('name',' id')->toArray();
            $view->with('symptomeItems', $symptomeItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $agentItems = Agent::pluck('name',' id')->toArray();
            $view->with('agentItems', $agentItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $userItems = User::pluck('name',' id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $symptomeItems = Symptome::pluck('name',' id')->toArray();
            $view->with('symptomeItems', $symptomeItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $agentItems = Agent::pluck('name',' id')->toArray();
            $view->with('agentItems', $agentItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $userItems = User::pluck('name',' id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $symptomeItems = Symptome::pluck('name',' id')->toArray();
            $view->with('symptomeItems', $symptomeItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $agentItems = Agent::pluck('name',' id')->toArray();
            $view->with('agentItems', $agentItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $userItems = User::pluck('name',' id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $symptomeItems = Symptome::pluck('name',' id')->toArray();
            $view->with('symptomeItems', $symptomeItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $agentItems = Agent::pluck('name',' id')->toArray();
            $view->with('agentItems', $agentItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $userItems = User::pluck('name',' id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $symptomeItems = Symptome::pluck('name',' id')->toArray();
            $view->with('symptomeItems', $symptomeItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $agentItems = Agent::pluck('name',' id')->toArray();
            $view->with('agentItems', $agentItems);
        });
        View::composer(['cas_infecteds.fields'], function ($view) {
            $userItems = User::pluck('name',' id')->toArray();
            $view->with('userItems', $userItems);
        });

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