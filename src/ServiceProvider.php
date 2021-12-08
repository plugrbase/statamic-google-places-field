<?php

namespace Plugrbase\GooglePlacesField;

use SKAgarwal\GoogleApi\ServiceProvider as SKAgarwalServiceProvider;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        \Plugrbase\GooglePlacesField\Tags\GPlaceData::class,
    ];

    protected $fieldtypes = [
        Fieldtypes\GooglePlaceFieldtype::class,
    ];

    protected $scripts = [
        __DIR__.'/../dist/js/cp.js'
    ];

    protected $routes = [
        'cp' => __DIR__.'/../routes/cp.php',
    ];

    public function bootAddon()
    {
        $this->bootAddonConfig();
    }

    protected function bootAddonConfig()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/google_place_field.php', 'statamic.google_place_field');

        $this->publishes([
            __DIR__.'/../config/google_place_field.php' => config_path('statamic/google_place_field.php'),
        ], 'google-place-field-config');

        return $this;
    }

    public function register()
    {
        $this->app->register(SKAgarwalServiceProvider::class);
    }
}
