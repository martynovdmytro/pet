import Vue from 'vue';
import VueRouter from "vue-router";

import Home from './components/Home';
import About from './components/About';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: Home,
            component: Home
        },
        {
            path: '/about',
            name: About,
            component: About
        }
    ]
});

export default router;