<?php

use Illuminate\Support\Facades\Route;
use Plugrbase\GooglePlacesField\Http\Controllers\Api\PlaceApiController;

Route::get('/plugrbase/google-places-field/{place}', [PlaceApiController::class, 'show'])->name('plugrbase.places');
