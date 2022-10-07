require('./bootstrap');

import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./routes";

/*
    MAIN VUE ASSEMBLING
    Component registration via Vue.component('component-name', require('./components/ComponentName.vue).default)
 */

Vue.use(VueRouter);

Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('navbar-component', require('./components/NavbarComponent.vue').default);
Vue.component('content-box-left', require('./components/ContentBoxLeft.vue').default);
Vue.component('content-box-right', require('./components/ContentBoxRight.vue').default);

let app = new Vue({
    router: new VueRouter(routes),
    el: '#app',
});
