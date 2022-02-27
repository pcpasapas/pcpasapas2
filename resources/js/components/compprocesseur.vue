<template>  
  <div class="accordion-item" v-if ="this.$store.state.processeurchoisistore === ''">
    <h2 class="accordion-header" id="headingThree">
      <button id ="processeur" class="accordion-button collapsed" @click="processeur()" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Processeur
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <div @deleteProc.prevent>
              <div class="d-flex align-items-center" v-if = 'this.loading'>
                <strong>Chargement de vos composants .... </strong>
                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
              </div>
            <h4 v-if='this.loading == false'>  "Choississez votre processeur, il sera sans doute le composant le plus cher mais aussi le plus important de votre config" </h4>
            <ul class=menuUl1>
            <li class="menuli1" v-for="(item) in procbdd" @click="click(item)" :key="item.id">{{ item.text }}
            <p class="prix" v-if="item.prix != null"> {{ item.prix }} €</p>
            <img v-if="item.img != ''" class="image" :src= item.img>
            </li>
            </ul>
            </div>
      </div>
    </div>
    </div>
</template>

<script>

import store from '../store/index' 

export default {
    name: 'compprocesseur', 
    props: {
        id:Number,
        alim:"",
    },
    data: function() {
      return {
          procbdd:[],
          loading : true,
      }
    },
    methods: {
        processeurok(item) {
            this.$store.commit('UPDATE_PROCESSEUR',item)
            this.$store.commit('UPDATE_PRIX', item.prix)
        },
        click(item, item2){
            this.processeurok(item);
            this.$emit('delete',item)
        },
        processeur() {
            axios.get('https://pcpasapas2.herokuapp.com/api/processeurs') 
                .then(res => {
                    this.procbdd = (res.data)
                    console.log(this.procbdd)
                    this.loading = false
                    return res.data
                })
        }
    },
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
    grid-template-columns: 33% 33% 33%;
    background-color:rgba(184, 201, 248, 0.842);
    border-radius: 20px;
    margin: 0px;
    padding:0px;
    justify-items: center;
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
#boitier :hover{
        background-color: cadetblue;
        color: white;
    }

</style>

