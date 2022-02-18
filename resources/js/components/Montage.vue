<template>  
            <div>
            <comppanier></comppanier>
            <h3>{{ label }}</h3>
            
            <ul class="menuUl1">
            <li class="menuli1" v-for="(item) in menus" @click="changerMenus(item.id, item.text_prog, item.label)" :key='item'>{{ item.text }}
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
import menusproc from '../components/compprocesseur.vue'
import menusboitier from '../components/compboitier.vue'
import menusalim from '../components/compalim.vue'
import menusssd from '../components/compssd.vue'
import menuscartemere from '../components/compcartemere.vue'
import menuscg from '../components/compcg.vue'
import router from '../router'
let tabconfig =[]
export default {
    name: "Montage",
    data() {
        return {
            label: label0,
            premierMenu_,
            menus: premierMenu_,
            alimentationsbdd:[],
        };
    },
    methods: {
        changerMenus(id, index, label) {
            console.log("change")

            if (index === "composants_boitier") {
                router.push({ name: "ComposantsView" });
            }
            else if (id === 21) {
                var tabconfig = {
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
                console.log("gta V");
                var tabconfig = {
                    boitier:2,
                    alim:1,
                    processeur:3,
                    ssd:1,
                    cartemere:0,
                    cg:1,
                }
                // console.log(menuscg.props.menuscg.default[1])
                // this.changerpanier(tabconfig)
                console.log(this.$store.state.alimchoisistore.text)
                this.changerpanier();
            }
            else {
                this.menus = eval(index);
            }
        },
        async changerpanier() {
            await axios.get('http://127.0.0.1:8000/api/alimentationsshowGTA')
                .then(res => {
                    this.alimentationsbdd = (res.data[0])
                    console.log(this.alimentationsbdd)
                    this.loading = false
                    return res.data
                })
            // this.$store.commit('UPDATE_BOITIER',menusboitier.props.menusboitier.default[tab.boitier])
            // this.$store.commit('UPDATE_PRIX', this.$store.state.boitierchoisistore.prix)
            // if(this.alimentationsbdd != '') {
                console.log("entree dans le store")
            this.$store.commit('UPDATE_ALIM',this.alimentationsbdd)
            this.$store.commit('UPDATE_PRIX', this.$store.state.alimchoisistore.prix)
            console.log(this.$store.state.alimchoisistore.text)
    
            // this.$store.commit('UPDATE_PROCESSEUR',menusproc.props.menusproc.default[tab.processeur])
            // this.$store.commit('UPDATE_PRIX', this.$store.state.processeurchoisistore.prix)
            // this.$store.commit('UPDATE_SSD',menusssd.props.menusssd.default[tab.ssd])
            // this.$store.commit('UPDATE_PRIX', this.$store.state.ssdchoisistore.prix)
            // this.$store.commit('UPDATE_CARTE_MERE',menuscartemere.props.menuscartemere.default[tab.cartemere])
            // this.$store.commit('UPDATE_PRIX', this.$store.state.cartemerechoisistore.prix)
            // if (tab.cg != "") {
            //     this.$store.commit('UPDATE_CG',menuscg.props.menuscg.default[tab.cg])
            //     this.$store.commit('UPDATE_PRIX', this.$store.state.cgchoisistore.prix)
            // }
            
        }
    },
    components: {
        comppanier
    }
}

</script>

<style>
:root {
    --bleu: rgb(62, 176, 180);
    --bleufonce: rgb(71, 8, 243);
}
.menuUl1 {
    list-style-type: none;
    justify-content: space-around;
    display: flex;
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

