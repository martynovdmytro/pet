import Home from "./components/module/Home/Home";
import Subcategory from "./components/module/subcategory/Subcategory";

/*
    MAIN SPA ROUTES
 */

export default {
    mode: "history",

    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/api/subcategory/:id',
            component: Subcategory
        }
    ]
}