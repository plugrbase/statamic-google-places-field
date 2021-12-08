<?php

use Illuminate\Support\Facades\Route;
use Plugrbase\GooglePlacesField\Http\Controllers\Api\PlaceApiController;

Route::get('/plugrbase-places/{place}', [PlaceApiController::class, 'show'])->name('plugrbase.places');
