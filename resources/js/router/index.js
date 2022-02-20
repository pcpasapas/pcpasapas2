// import { createRouter, createWebHashHistory } from "vue-router";
import Vue from "vue";
import Home from "../components/Home.vue";
// import About from "@/views/About.vue";
import Montage from "../components/Montage.vue";
import Composants from "../components/Composants.vue";
import Devis from "../components/compdevis.vue";
import VueRouter from 'vue-router'

Vue.use(VueRouter)
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
    {
        path: "/devis",
        name: "Devis",
        component: Devis,
        props: true
    },
    {
        path: "/Home",
        name: "Home",
        component: Devis,
        props: true
    },
];

const router = new VueRouter({
    mode: 'history',
    routes,
});

export default router;