// import { createRouter, createWebHashHistory } from "vue-router";
import Home from "../components/Home.vue";
// import About from "@/views/About.vue";
import Montage from "../components/Montage.vue";
import Composants from "../components/Composants.vue";
// import Devis from "@/views/Devis.vue";
import VueRouter from 'vue-router'

const routes = [{
        path: "/",
        name: "Home",
        component: Home,
    },
    // {
    //     path: "/about",
    //     name: "About",
    //     component: About,
    // },
    {
        path: "/montage",
        name: "Montage",
        component: Montage,
        props: true
    },
    {
        path: "/composants",
        name: "ComposantsView",
        component: Composants,
        props: true
    },
    // {
    //     path: "/devis",
    //     name: "DevisView",
    //     component: Devis,
    //     props: true
    // }
];

const router = new VueRouter({
    mode: 'history',
    routes,
});

export default router;