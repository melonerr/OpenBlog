import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";
import editor from "../views/editor.vue";
import editor2 from "../views/editor2.vue";
import editor3 from "../views/editor3.vue";
import Blogs from "../views/Blogs.vue";
import BlogsAll from "../views/BlogsAll.vue";
import Chart from "../views/Chart.vue";

const routes = [{
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/editor",
        name: "editor",
        component: editor,
    }, {
        path: "/editor2",
        name: "editor2",
        component: editor2,
    },
    {
        path: "/editor3",
        name: "editor3",
        component: editor3,
    },
    {
        path: "/blogs",
        name: "blogs",
        component: Blogs,
    },
    {
        path: "/blogs-all",
        name: "blogsall",
        component: BlogsAll,
    },
    {
        path: "/chart",
        name: "chart",
        component: Chart,
    },
    {
        path: "/about",
        name: "About",
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "about" */ "../views/About.vue"),
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;