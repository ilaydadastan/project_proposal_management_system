<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Solarium\Client;
use Solarium\Core\Client\Adapter\Curl;
use Symfony\Component\EventDispatcher\EventDispatcher;

class SolariumServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register any application services.
     *
     * @return  void
     */
    public function register()
    {
        $adapter = new Curl();
        $eventDispatcher = new EventDispatcher();
        $this->app->bind(Client::class, function ($app) use ($adapter, $eventDispatcher) {
            return new Client($adapter, $eventDispatcher, $app['config']['solarium']);
        });
    }

    public function provides()
    {
        return [Client::class];
    }
}
