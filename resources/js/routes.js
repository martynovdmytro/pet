import Home from "./components/module/Home/Home";

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
    ]
}