<?php

namespace Plugrbase\GooglePlace;

use SKAgarwal\GoogleApi\PlacesApi;

class GooglePlace
{
    /**
     * The PlacesApi object
     *
     * @var SKAgarwal\GoogleApi\PlacesApi
     */
    protected $placeApi;

    /**
     * Request constructor.
     */
    public function __construct()
    {
        if (!config()->has('statamic.google_place_field.gmap_api_key') || !config('statamic.google_place_field.gmap_api_key')) {
            return 'Please add a Google Maps API key in config [statamic.google_place_field.gmap_api_key]';
        }

        $this->placeApi = new PlacesApi(config('statamic.google_place_field.gmap_api_key'));
    }
}
