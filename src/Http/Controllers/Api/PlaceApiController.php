<?php

namespace Plugrbase\GooglePlacesField\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Plugrbase\GooglePlacesField\GooglePlace;
use Plugrbase\GooglePlacesField\Http\Resources\PlaceResource;
use SKAgarwal\GoogleApi\PlacesApi;

class PlaceApiController extends Controller
{
    /**
     * The PlacesApi object
     *
     * @var SKAgarwal\GoogleApi\PlacesApi
     */
    protected $placeApi;

    /**
     * Display the specified resource.
     *
     * @param  string  $place
     * @return \Illuminate\Http\Response
     */
    public function show($place)
    {
        $this->placeApi = new PlacesApi(config('statamic.google_place_field.gmap_api_key'));
        $places = (new GooglePlace())->getData($place);
        return new PlaceResource($places);
    }
}
