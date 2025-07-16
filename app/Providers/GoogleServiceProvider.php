<?php

namespace App\Providers;

use App\Models\Google;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class GoogleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $googleConfig = Google::first();

     if ($googleConfig && $googleConfig->client_id && $googleConfig->secret_key && $googleConfig->redirect_url) {
        Config::set('services.google.client_id', $googleConfig->client_id);
        Config::set('services.google.client_secret', $googleConfig->secret_key);
        Config::set('services.google.redirect', $googleConfig->redirect_url);
    }


    }
}
