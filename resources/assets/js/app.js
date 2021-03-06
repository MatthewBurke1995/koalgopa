
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 Vue.component('interviewpreview', require('./components/interviewpreview.vue'));


Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('qanda', require('./components/Qanda.vue'));

Vue.component('forumpost', require('./components/forumpost.vue'));
Vue.component('comment', require('./components/comment.vue'));

Vue.component('stars', require('./components/stars.vue'));

Vue.component('autocomplete',require('./components/Autocomplete.vue'));


const app = new Vue({
    el: '#app'
});
1
