<?php

namespace Plugrbase\GooglePlacesField\Tags;

use Statamic\Tags\Tags;

class GPlaceData extends Tags
{
    /**
     * {{ g_place_data }} ... {{ /g_place_data }}
     */
    public function index()
    {
        if (!$data = $this->params->get('data')) {
            return 'The text input specifying which place to search for is missing.';
        }

        return collect(json_decode($data));
    }
}
