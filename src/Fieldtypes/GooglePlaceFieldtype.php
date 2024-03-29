<?php

namespace Plugrbase\GooglePlacesField\Fieldtypes;

use Statamic\Fields\Fieldtype;

class GooglePlaceFieldtype extends Fieldtype
{
    protected $icon = 'earth';
    
    /**
     * The blank/default value.
     *
     * @return array
     */
    public function defaultValue()
    {
        return null;
    }

    public function preload()
    {
        return ['fetch_url' => '/cp/plugrbase/google-places-field'];
    }

    /**
     * Pre-process the data before it gets sent to the publish page.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function preProcess($data)
    {
        return $data;
    }

    /**
     * Process the data before it gets saved.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function process($data)
    {
        return $data;
    }
}
