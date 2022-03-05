import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);
// Create a new store instance.
const store = new Vuex.Store({
    state() {
        return {
            boitierchoisistore: "",
            alimchoisistore: "",
            processeurchoisistore: "",
            ssdchoisistore: "",
            cartemerechoisistore: "",
            prixtotalstore: 0,
            cgchoisistore: "",
            ramchoisistore: "",
            menus: [
                { id: 1, id_supp: 1, text_prog: "config_jeu", text: "En fonction de la configuration recommmandée d'un jeu", img: "" },
                { id: 2, id_supp: 1, text_prog: "utilisation", text: "En fonction de votre utilisation", img: "" },
                { id: 3, id_supp: 1, text_prog: 'budget', text: "En fonction de votre budget", img: "" },
                { id: 4, id_supp: 1, text_prog: "composants_boitier", text: "Composants après composants", img: "" },
            ],
        }
    },
    mutations: {
        UPDATE_MENUS(state, payload) {
            state.menus = payload
        },
        UPDATE_BOITIER(state, payload) {
            state.boitierchoisistore = payload
        },
        UPDATE_ALIM(state, payload) {
            state.alimchoisistore = payload
        },
        UPDATE_PROCESSEUR(state, payload) {
            state.processeurchoisistore = payload
        },
        UPDATE_SSD(state, payload) {
            state.ssdchoisistore = payload
        },
        UPDATE_CARTE_MERE(state, payload) {
            state.cartemerechoisistore = payload
        },
        UPDATE_CG(state, payload) {
            state.cgchoisistore = payload
        },
        UPDATE_RAM(state, payload) {
            state.ramchoisistore = payload
        },
        UPDATE_PRIX(state, payload) {
            state.prixtotalstore += payload
        },
        EFFACER_PANIER(state) {
            state.boitierchoisistore = "",
                state.cartemerechoisistore = "",
                state.prixtotalstore = 0,
                state.processeurchoisistore = "",
                state.ssdchoisistore = "",
                state.alimchoisistore = "",
                state.cgchoisistore = "",
                state.ramchoisistore = ""
        }
    },
    actions: {


    }
})
export default store