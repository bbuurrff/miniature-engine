require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

import Vue from 'vue';

import * as VueGoogleMaps from 'vue2-google-maps';

Vue.component('google-map', VueGoogleMaps.Map);

Vue.use(VueGoogleMaps, {
    load: {
        key: ''
    },
    //installComponents: true, 
});

const app = new Vue({
    el: '#app',
});
