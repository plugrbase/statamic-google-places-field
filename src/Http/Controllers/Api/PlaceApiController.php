<?php

namespace Plugrbase\GooglePlacesField\Http\Controllers\Api;

use Exception;
use App\Http\Controllers\Controller;
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
     * @param  string  $placeId
     * @return \Illuminate\Http\Response
     */
    public function show($placeId)
    {
        $this->placeApi = new PlacesApi(config('statamic.google_place_field.gmap_api_key'));

        try {
            $places = $this->placeApi->placeDetails($placeId);
        } catch (Exception $e) {
            return [];
        }
        
        return new PlaceResource($places);
    }
}
