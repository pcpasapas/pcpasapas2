<template>  
  <div class="accordion-item" v-if ="this.$store.state.cgchoisistore === ''">
    <h2 class="accordion-header" id="headingSix">
      <button id ="cg" class="accordion-button collapsed" @click="cg()" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Carte Graphique
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <div @deletecg.prevent>
              <div class="d-flex align-items-center" v-if = 'this.loading'>
                <strong>Chargement de vos composants .... </strong>
                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
              </div>
            <h4 v-if='this.loading == false'> "Choississez votre carte graphique" </h4>
            <ul class=menuUl1>
            <li class="menuli1" v-for="(item) in cgbdd" @click="click(item)" :key="item.id">{{ item.text }}
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
          cgbdd:[],
          loading : true,
      }
    },
    methods: {
        cgok(item) {
            console.log(item)
            this.$store.commit('UPDATE_CG',item)
            this.$store.commit('UPDATE_PRIX', item.prix)
        },
        click(item, item2){
            this.cgok(item);
            this.$emit('delete',item)
        },
        cg() {
            axios.get('https://pcpasapas2.herokuapp.com/api/cg') 
                .then(res => {
                    this.cgbdd = (res.data)
                    this.loading = false
                    return res.data
                }).catch(function (error) {
                    if (error.response) {
                    console.log(error.response.data);
                    console.log(error.response.status);
                    console.log(error.response.headers);
                    console.log(error.toJSON());
                    }
                })
        }
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
