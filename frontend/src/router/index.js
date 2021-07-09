import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";
import editor from "../views/editor.vue";
import Blogs from "../views/Blogs.vue";
import BlogsAll from "../views/BlogsAll.vue";

const routes = [{
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/editor",
        name: "editor",
        component: editor,
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