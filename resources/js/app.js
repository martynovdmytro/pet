require('./bootstrap');

import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./routes";

window.$ = window.jQuery = require('jquery')


/*
    MAIN VUE ASSEMBLING
    New component registration:
    Vue.component('component-name', require('./components/ComponentName.vue).default);
 */

Vue.use(VueRouter);

Vue.config.devtools = true // should be deleted when dev is finished

/* Index */

Vue.component('header-component', require('./components/header-component/HeaderComponent.vue').default);
Vue.component('navbar-component', require('./components/navbar-component/NavbarComponent.vue').default);
Vue.component('content-box-left', require('./components/content-box-left/ContentBoxLeft.vue').default);
Vue.component('content-box-right', require('./components/content-box-right/ContentBoxRight.vue').default);

/* Admin */

Vue.component('left-panel', require('./components/admin/left-panel/LeftPanel.vue').default);
Vue.component('right-panel', require('./components/admin/right-panel/RightPanel.vue').default);
Vue.component('content-box', require('./components/admin/content-box/ContentBox.vue').default);

let app = new Vue({
    router: new VueRouter(routes),
    el: '#app',
});
