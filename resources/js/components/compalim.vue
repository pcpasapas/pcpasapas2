<template>  
  <div class="accordion-item" v-if ="this.$store.state.alimchoisistore === ''">
    <h2 class="accordion-header" id="headingTwo">
      <button id = "alim" class="accordion-button collapsed" @click="alim()" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Alimentations
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <div @deleteAlim>
              <div class="d-flex align-items-center" v-if = 'this.loading'>
                <strong>Chargement de vos composants ...</strong>
                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
              </div>
            <h4 v-if = 'this.loading == false'> "Choississez votre alimentation, elle transmettra l'énergie nécessaire a votre ordinateur" </h4>
            <ul class=menuUl1>
            <li class="menuli1" v-for="(item) in alimentationsbdd" @click="click(item, item.id)">{{ item.text }}
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


export default {
    name: 'compalim', 
    props: {
        id:Number,
        // menusalim: {
        //     default: menusalim
        // }
    },
    data () {
      return {
        //   menusalim_:menusalim,
          alimentationsbdd:[],
          loading : true,
      }
    },
    methods: {
        alimok(item) {
            console.log(item)
            this.$store.commit('UPDATE_ALIM',item)
            this.$store.commit('UPDATE_PRIX', item.prix)
        },
        click(item, item2){
            this.alimok(item);
            this.$emit('delete',item)
        },
        alim(){
            document.getElementById("alim").focus();
            axios.get('http://127.0.0.1:8000/api/alimentations')
                .then(res => {
                    this.alimentationsbdd = (res.data)
                    console.log(this.alimentationsbdd)
                    this.loading = false
                    return res.data
                })
        }
    

    },
 beforeMount() {
        if (this.$store.state.boitierchoisistore.alim === true ) {
            menusalim = []
        }

        
 
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
    display:none;
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

