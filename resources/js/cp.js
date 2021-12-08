
/**
 * When extending the control panel, be sure to uncomment the necessary code for your build process:
 * https://statamic.dev/extending/control-panel
 */

import GooglePlaceFieldtype from './components/fieldtypes/GooglePlaceFieldtype.vue'

Statamic.booting(() => {
    Statamic.component('google_place-fieldtype', GooglePlaceFieldtype)
})
