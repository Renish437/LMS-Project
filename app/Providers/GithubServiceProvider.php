<?php

namespace App\Providers;

use App\Models\Github;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class GithubServiceProvider extends ServiceProvider
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
        $githubConfig = Github::first();
        if($githubConfig && $githubConfig->client_id && $githubConfig->secret_key && $githubConfig->redirect_url){
            Config::set('services.github.client_id', $githubConfig->client_id);
            Config::set('services.github.client_secret', $githubConfig->secret_key);
            Config::set('services.github.redirect', $githubConfig->redirect_url);
        }
    }
}
