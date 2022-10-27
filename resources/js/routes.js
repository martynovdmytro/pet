import Home from "./components/module/Home/Home";
import Subcategory from "./components/module/subcategory/Subcategory";
import Admin from "./components/admin/home/Admin";

/*
    MAIN SPA ROUTES
 */

export default {
    mode: "history",

    routes: [
        {
            path: '/',
            component: Home,

        },
        {
            path: '/subcategory/:slug',
            component: Subcategory,
        },
        {
            path: '/admin/image/upload',
            component: Admin
        }
    ]
}