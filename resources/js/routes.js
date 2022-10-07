import Home from "./components/Home";
import About from "./components/About";
import Valera from "./components/Valera";

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
        },
        {
            path: '/valera',
            component: Valera
        }
    ]
}