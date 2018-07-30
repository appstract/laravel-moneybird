<?php

namespace Appstract\Skeleton;

use Illuminate\Support\ServiceProvider;
use Picqer\Financials\Moneybird\Moneybird;
use Picqer\Financials\Moneybird\Connection;

class MoneybirdServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/moneybird.php' => config_path('moneybird.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/moneybird.php', 'moneybird');

        $this->app->bind('moneybird', function ($app) {
            $connection = new Connection();

            $connection->setRedirectUrl(config('moneybird.redirect_uri'));
            $connection->setClientId(config('moneybird.client_id'));
            $connection->setClientSecret(config('moneybird.client_secret'));

            if(config('moneybird.authorization_token')) {
                $connection->setAuthorizationCode(config('moneybird.authorization_token'));
            }

            if(config('moneybird.access_token')) {
                $connection->setAccessToken(config('moneybird.access_token'));
            }

            if(config('moneybird.administration_id')) {
                $connection->setAdministrationId(config('moneybird.administration_id'));
            }

            $moneybird = new Moneybird($connection);

            return $moneybird;
        });
    }

    /**
     * [provides description]
     * @return [type] [description]
     */
    public function provides() {
        return ['moneybird'];
    }
}
