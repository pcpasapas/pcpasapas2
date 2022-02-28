<template>  
  <div class="accordion-item" v-if ="this.$store.state.cartemerechoisistore === ''">
    <h2 class="accordion-header" id="headingFour">
      <button id ="cartemere" class="accordion-button collapsed" @click="cartemere()" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Carte mère
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <div @deleteCm.prevent>
              <div class="d-flex align-items-center" v-if = 'this.loading'>
                <strong>Chargement de vos composants .... </strong>
                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
              </div>
            <h4 v-if='this.loading == false'> "Choississez votre carte mère, elle reliera tous les élements entres eux à l'interieur de votre boitier" </h4>
            <ul class=menuUl1>
            <li class="menuli1" v-for="(item) in cmbdd" @click="click(item)" :key="item.id">{{ item.text }}
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
          cmbdd:[],
          loading : true,
      }
    },
    methods: {
        cartemereok(item) {
            this.$store.commit('UPDATE_CARTE_MERE',item)
            this.$store.commit('UPDATE_PRIX', item.prix)
        },
        click(item, item2){
            this.cartemereok(item);
            this.$emit('delete',item)
        },
        cartemere() {
            axios.get('https://pcpasapas2.herokuapp.com/api/cartemere') 
                .then(res => {
                    
                    this.cmbdd = (res.data)
                    console.log(this.cmbdd)
                    if (this.$store.state.processeurchoisistore != "") {
                        console.log("entree diff")
                        console.log(this.cmbdd)
                        this.cmbdd = this.cmbdd.filter(cm => cm.socket == this.$store.state.processeurchoisistore.socket)
                        console.log(this.cmbdd)
                    }
                    this.loading = false
                    return res.data
                }).catch(function (error) {
                    if (error.response) {
      // The request was made and the server responded with a status code
      // that falls out of the range of 2xx
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






