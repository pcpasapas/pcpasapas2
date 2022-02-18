<template>  
  <div class="accordion-item" v-if ="this.$store.state.boitierchoisistore === ''">
    <h2 class="accordion-header" id="headingOne">
      <button id ="boitier" class="accordion-button collapsed" @click="boitier()" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Boitiers
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <div @deleteAlim.prevent>
              <div class="d-flex align-items-center" v-if = 'this.loading'>
                <strong>Chargement de vos composants .... </strong>
                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
              </div>
            <h4 v-if='this.loading == false'> "Choississez votre boitier, il intégrera tous vos composants " </h4>
            <ul class=menuUl1>
            <li class="menuli1" v-for="(item) in boitiersbdd" @click="click(item, item.id)" :key="item">{{ item.text }}
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
    name: 'compboitier', 
    props: {
        id:Number,
        alim:"",
    },
    data: function() {
      return {
          boitiersbdd:[],
          loading : true,
      }
    },
    methods: {
        boitierok(item) {
            console.log(item)
            this.$store.commit('UPDATE_BOITIER',item)
            this.$store.commit('UPDATE_PRIX', item.prix)
            if (item.id === 42){
                this.$store.commit('UPDATE_ALIM',0)
            }
        },
        boitier() {
            axios.get('http://127.0.0.1:8000/api/boitiers')
                .then(res => {
                    this.boitiersbdd = (res.data)
                    console.log(this.boitiersbdd)
                    this.loading = false
                    return res.data
                    
                })
        },
        click(item, item2){
            this.boitierok(item);
            this.$emit('delete',item)
        },
    },
    // mounted(){
    //     axios.get('http://127.0.0.1:8000/api/boitiers')
    //             .then(res => {
    //                 this.boitiersbdd = (res.data)
    //                 console.log(this.boitiersbdd)
    //                 return res.data
    //             })
    // }

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
    background-color:rgba(184, 201, 248, 0.842);
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
#boitier :hover{
        background-color: cadetblue;
        color: white;
    }
</style>

