import Home from "./Home";
import About from "./About";

export default {
    mode: "history",

    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/about',
            component: About
        }
    ]
}