<?php

namespace App\Providers;

use App\Models\MailSetting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider
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
          // Fetch mail settings from the database
        $mailSettings = MailSetting::first();


        if ($mailSettings) {


            Config::set('mail.driver', $mailSettings->mailer);
            Config::set('mail.host', $mailSettings->host);
            Config::set('mail.port', $mailSettings->port);
            Config::set('mail.username', $mailSettings->username);
            Config::set('mail.password', $mailSettings->password);
            Config::set('mail.encryption', $mailSettings->encryption);
            Config::set('mail.from.address', $mailSettings->from_address);
            Config::set('mail.from.name', $mailSettings->from_name);
        }
    }
}
