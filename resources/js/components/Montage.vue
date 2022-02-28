<template>  
            <div>
                <div class="d-flex align-items-center" v-if = 'this.loading'>
                    <strong>Recherche de vos composants ...</strong>
                    <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                </div>
            <comppanier></comppanier>
            <h3>{{ label }}</h3>
            
            <ul class="menuUl1">
            <li class="menuli1" v-for="(item) in menus" @click="changerMenus(item.id, item.text_prog, item.label)" :key='item.id'>{{ item.text }}
            <p class="prix" v-if="item.prix != null"> {{ item.prix }} €</p>
            <img v-show="item.img != ''" class="image" :src= item.img>
            </li>
            </ul>
            <ul class="menusUl1" >
            </ul>
            </div>
</template>

<script>


const label0 = "Comment voulez-vous choisir votre configuration ?"
const label1 = "Quelle sera votre utilisation ?"
const label2 = "Quel est votre budget ?"
const label4 = "Choississez votre alimentation"
const label6 = "Choississez le jeu auquel vous voulez jouer?"

const budget = [
    { id: 31 , id_supp:2, text:"Moins de 300 €", img:""},
    { id: 32 , id_supp:2, text:"Entre 300 € et 500 €", img:""},
    { id: 33 , id_supp:2, text:"Entre 500 € et 700 €", img:""},
    { id: 34 , id_supp:2, text:"Plus de 700 €", img:""},
]

const config_jeu = [
    { id: 11 , id_supp:2, text:"GTA V", img:""},
    { id: 12 , id_supp:2, text:"Battlefield V", img:""},
    { id: 13 , id_supp:2, text:"Les Sims", img:""},
    { id: 14 , id_supp:2, text:"Monopoly", img:""},
]

const premierMenu_ = [
    { id: 1 , id_supp: 1, text_prog:"config_jeu", text:"En fonction de la configuration recommmandée d'un jeu", img:""},
    { id: 2 , id_supp: 1, text_prog:"utilisation", text:"En fonction de votre utilisation", img:""},
    { id: 3 , id_supp: 1, text_prog:'budget', label:label2, text:"En fonction de votre budget", img:""},
    { id: 4 , id_supp: 1, text_prog:"composants_boitier", text:"Composants après composants", img:""},
]

const utilisation = [
    { id: 21 , id_supp:2, text:"Utilisation bureautique, accès internet rare", img:""},
    { id: 22 , id_supp:2, text:"Utilisation poussée d'internet : télétravail, réseaux sociaux, partage de photos", img:""},
    { id: 23 , id_supp:2, text:"Jeux simples utilisant peu de ressources", img:""},    
    { id: 24 , id_supp:2, text:"Jeux gourmands en ressources", img:""}, 
    { id: 25 , id_supp:2, text:"Cryptomonnaies", img:""}, 
]


var menus = []
import comppanier from './comppanier.vue'
import router from '../router'
let tabconfig =[]
export default {
    name: "Montage",
    data() {
        return {
            tabconfig: {},
            label: label0,
            premierMenu_,
            menus: premierMenu_,
            alimentationsbdd:[],
            boitiersbdd:[],
            loading: false,
        };
    },
    methods: {
        async changerMenus(id, index, label) {
            console.log("change")

            if (index === "composants_boitier") {
                router.push({ name: "ComposantsView" });
            }
            else if (id === 21) {
                tabconfig = {
                    boitier:0,
                    alim:"",
                    processeur:0,
                    ssd:0,
                    cartemere:1, 
                    cg:"",
                }
                this.changerpanier(tabconfig)
            }
            else if (id === 11) {
                tabconfig = {
                    boitier:1,
                    alim:0,
                    processeur:3,
                    ssd:2,
                    cartemere:2,
                    cg:1,
                }
                await this.changerpanier(tabconfig);
                this.loading = false;
            }
            else {
                this.menus = eval(index);
            }
        },
        changerpanier(tabconfig) {
            this.loading = true
            axios.get('http://127.0.0.1:8000/api/boitiers')
                .then(res => {
                    this.boitiersbdd = (res.data);
                    this.$store.commit('UPDATE_BOITIER',this.boitiersbdd[eval(tabconfig.boitier)]);
                    this.$store.commit('UPDATE_PRIX', this.boitiersbdd[eval(tabconfig.boitier)].prix);  
                })
            axios.get('http://127.0.0.1:8000/api/alimentations')
                .then(res => {
                    this.alimbdd = (res.data);
                    this.$store.commit('UPDATE_ALIM',this.alimbdd[eval(tabconfig.alim)]);
                    this.$store.commit('UPDATE_PRIX', this.alimbdd[eval(tabconfig.alim)].prix)
                    
                })
            axios.get('http://127.0.0.1:8000/api/processeurs')
                .then(res => {
                    this.procbdd = (res.data);
                    this.$store.commit('UPDATE_PROCESSEUR',this.procbdd[eval(tabconfig.processeur)]);
                    this.$store.commit('UPDATE_PRIX', this.procbdd[eval(tabconfig.processeur)].prix)
                })   
        }     
},            
    components: {
        comppanier
    }
}

</script>

<style scoped>
:root {
    --bleu: rgb(62, 176, 180); 
    --bleufonce: rgb(71, 8, 243);
}
.menuUl1 {
    list-style-type: none;
    justify-content: space-around;
    display: grid;
    grid-template-columns: 50% 50%;
    padding:10px;
    justify-content: space-around;
    background-color: rgb(62, 176, 180);
    border-radius: 20px;
    margin-top: 0px
}
.menuli1 {
    border: 1px solid black;
    text-align: center;
    border-radius: 20px;
    list-style-type: none;
    background-color: white;
    display: grid;
    margin: 10px;
    padding: 10px;
    max-width: 200px;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    transition: transform 0.5s;
    cursor:pointer;
}

.menuli1:hover {
    transform: scale(1.1);
}

.image {
    display: grid;
    width: 100px;
    height: 100px;
    margin-left: auto;
    margin-right: auto;
    grid-area: "image";
}
.prix, .prix_label{
    font-weight: bold;
    font-size: 1.3rem;
    display: grid;
}
</style>

