<template>
    <div class="menu">
        <ul class="menuUl">
            <router-link :to="{ name:'Home'}" class="menuli acceuil">
                <li @click="effacepanier()">Accueil</li>
            </router-link>
            <li class="menuli a1" @click="effacepanier()">Dépannage / Recupération de données</li>
            <router-link :to="{ name:'Montage'}">
                <li class="menuli a1" @click="effacepanier()">Montage PC complet</li>
            </router-link>
            <router-link :to="{ name:'Creation'}">
                <li class="menuli a2" @click="effacepanier()">Création de sites internet</li>
            </router-link>
            <router-link :to="{ name:'ComposantsView'}">
                <li class="menuli a2" @click="effacepanier()">Achat de pieces détachées</li>
            </router-link>
            <router-link :to="{ name:'Devis'}">
                <li class="menuli a2" @click="effacepanier()">Demande de devis</li>
            </router-link>
             
        </ul>
    </div>   
</template>

<script>


export default {
	name: "TitreMenu",
    // components: router,
    data: function () {
        return {
            allData:[],
            premierMenu_ :[
    { id: 1 , id_supp: 1, text_prog:"config_jeu", text:"En fonction de la configuration recommmandée d'un jeu", img:""},
    { id: 2 , id_supp: 1, text_prog:"utilisation", text:"En fonction de votre utilisation", img:""},
    { id: 3 , id_supp: 1, text_prog:'budget', text:"En fonction de votre budget", img:""},
    { id: 4 , id_supp: 1, text_prog:"composants_boitier", text:"Composants après composants", img:""},
]
        }
        // eslint-disable-next-line no-unused-labels 
    },
    methods: {  
        effacepanier(){
            console.log("effacepanier")
            this.$store.commit("EFFACER_PANIER")
            this.$store.commit('UPDATE_MENUS', this.premierMenu_)
        }
    }
}
</script>



<style>
@import url('https://fonts.googleapis.com/css2?family=Dosis&family=Licorice&family=Shizuru&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
:root {
    --bleu: rgb(62, 176, 180);
    --bleufonce: rgb(71, 8, 243);
}

body {
    font-family: 'Dosis', sans-serif;
}

.div {
    display: flex;
}
p {
    user-select: none;
}

li {
    user-select: none;
}

.menuUl {
    list-style-type: none;
    border-radius: 20px;
    grid-template-rows: 50% 50%;
    grid-template-columns: 33% 33% 33%;
    background-color:rgba(184, 201, 248, 0.842);
    justify-content: space-around;
    display: grid;
    padding: 0px;
    margin-bottom:10px;
}

.menuli.acceuil{
    grid-row:1;
    grid-column:1;
}
.menuli.a1{
    grid-row: 1;
}
.menuli.a2{
    grid-row: 2;
}
.menuli {
    border: 1px solid black;
    text-align: center;
    border-radius: 20px;
    list-style-type: none;
    background-color: white;
    display: grid;
    grid-template-rows:50% 50%;
    margin: 10px;
    padding: 10px;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    transition: transform 0.5s;
    cursor:pointer;
}

.menuli:hover {
    background-color: var(--bleufonce);
    transform: scale(1.1);
    color: white;
}

a{
    text-decoration: none;
}
</style>

