require('./bootstrap');

import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./routes";

/*
    MAIN VUE ASSEMBLING
 */

Vue.use(VueRouter);

let app = new Vue({
    router: new VueRouter(routes),
    el: '#app',
});
