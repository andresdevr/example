/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy'

import VueRouter from 'vue-router';
import { routes } from './routes';

import Vuex from 'vuex';
import { vuex } from './store/store';

import VueCookies from 'vue-cookies';

import route from 'ziggy';
import { Ziggy } from './ziggy';

import '@fortawesome/fontawesome-free/js/all.js';

window.Vue.use(Buefy, {
    defaultIconPack: 'fas',
});
window.Vue.use(VueRouter);
window.Vue.use(Vuex);
window.Vue.use(VueCookies);

Vue.mixin({
    methods: {
        route: (name, params, absolute) => route(name, params, absolute, Ziggy),
    },
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('app', require('./layouts/App').default);
Vue.component('sidebar-item', require('./layouts/sidebar/SidebarItem').default);
Vue.component('b-card', require('./components/Card').default);
Vue.component('b-header', require('./components/Header').default);


//const files = require.context('./', true, /\.vue$/i)
//files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const store = new Vuex.Store(vuex);

export const router = new VueRouter({
    mode: "history",
    routes
});

const app = new Vue({
    el: '#app',
    router,
    store
});

