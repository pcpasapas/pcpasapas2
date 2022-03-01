<template>
<div>
    <div class="accordion" role="tablist">
        <b-card no-body class="mb-1" v-if="this.$store.state.boitierchoisistore != ''">
            <b-card-header header-tag="header" class="" role="tab" >
                <b-button block style ="background-color : white" v-b-toggle.accordion-1 variant="info">{{ this.$store.state.boitierchoisistore.text }} {{ this.$store.state.boitierchoisistore.prix }} €
                 <img class="card-img-top" style="width: 10%" :src="this.$store.state.boitierchoisistore.img" alt="Card image cap">    
                <i class="bi bi-caret-down-square-fill"></i>
                </b-button>
            </b-card-header>
        <b-collapse id="accordion-1" accordion="my-accordion" role="tabpanel">
        <b-card-body>
            <div class="card" id="boitier"  style="width: 40%;">
                <img class="card-img-top" :src="this.$store.state.boitierchoisistore.img" alt="Card image cap">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nombre de ports USB en facade : 4</li>
                    <li class="list-group-item">Alimentation incluse : {{this.$store.state.boitierchoisistore.alim}}</li> 
                    <li class="list-group-item">Format du boitier : {{this.$store.state.boitierchoisistore.format}}</li>
                    <li class="list-group-item">Prix : {{ this.$store.state.boitierchoisistore.prix }} €</li>
                </ul>
                <div class="card-body">
                    <a href="#" @click="boitierEnleve()" class="card-link">Choisir un autre boitier</a>
                    <a href="#" @click="boitierValide()" class="card-link">Valider ce boitier</a>
                </div> 
            </div>
        </b-card-body>
      </b-collapse>
        </b-card>
        <b-card no-body class="mb-1" v-if ="this.$store.state.alimchoisistore != ''">
            <b-card-header header-tag="header" class="p-1" role="tab">
                <b-button block style ="background-color : white" v-b-toggle.accordion-2 variant="info">{{ this.$store.state.alimchoisistore.text }} {{ this.$store.state.alimchoisistore.prix }} €
                    <img class="card-img-top" style="width: 10%" :src="this.$store.state.alimchoisistore.img" alt="Card image cap">    
                    <i class="bi bi-caret-down-square-fill"></i>
                </b-button>
            </b-card-header>
        <b-collapse id="accordion-2" accordion="my-accordion" role="tabpanel">
        <b-card-body>
            <div class="card" id="boitier"  style="width: 50%;">
                <img class="card-img-top" :src= this.$store.state.alimchoisistore.img alt="Card image cap">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Puissance de l'alimentation : {{this.$store.state.alimchoisistore.puissance}}W</li>
                    <li class="list-group-item">Prix : {{ this.$store.state.alimchoisistore.prix }} €</li>
                </ul>
                <div class="card-body">
                    <a href="#" @click="alimEnleve()" class="card-link">Choisir une autre alimentation</a>
                    <a href="#" @click="boitierValide()" class="card-link">Valider cette alimentation</a>
                </div> 
            </div>
        </b-card-body>
      </b-collapse>
        </b-card>
        <b-card no-body class="mb-1" v-if ="this.$store.state.processeurchoisistore != ''">
            <b-card-header header-tag="header" class="p-1" role="tab">
                <b-button block style ="background-color : white" v-b-toggle.accordion-3 variant="info">{{ this.$store.state.processeurchoisistore.text }} {{ this.$store.state.processeurchoisistore.prix }} €
                    <img class="card-img-top" style="width: 10%" :src="this.$store.state.processeurchoisistore.img" alt="Card image cap">
                    <i class="bi bi-caret-down-square-fill"></i>
                </b-button>
            </b-card-header>
        <b-collapse id="accordion-3"  accordion="my-accordion" role="tabpanel">
        <b-card-body>
            <div class="card" id="processeur"  style="width: 50%;">
                <img class="card-img-top" :src= this.$store.state.processeurchoisistore.img alt="Card image cap">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Puissance du processeur {{this.$store.state.processeurchoisistore.puissance}}Ghz</li>
                    <li class="list-group-item">Socket du processeur :  {{this.$store.state.processeurchoisistore.socket}}</li>
                    <li class="list-group-item">Prix : {{ this.$store.state.processeurchoisistore.prix }} €</li>
                </ul>
                <div class="card-body">
                    <a href="#" @click="processeurEnleve()" class="card-link">Choisir un autre processeur</a>
                    <a href="#" @click="boitierValide()" class="card-link">Valider ce processeur</a>
                </div> 
            </div>
        </b-card-body>
      </b-collapse>
        </b-card>
        <b-card no-body class="mb-1" v-if ="this.$store.state.cartemerechoisistore != ''">
            <b-card-header header-tag="header" class="p-1" role="tab">
                <b-button block style ="background-color : white" v-b-toggle.accordion-4 variant="info">{{ this.$store.state.cartemerechoisistore.text }} {{ this.$store.state.cartemerechoisistore.prix }} €
                    <img class="card-img-top" style="width: 10%" :src="this.$store.state.cartemerechoisistore.img" alt="Card image cap">
                    <i class="bi bi-caret-down-square-fill"></i>
                </b-button>
            </b-card-header>
        <b-collapse id="accordion-4"  accordion="my-accordion" role="tabpanel">
        <b-card-body>
            <div class="card" id="cartemere"  style="width: 50%;">
                <img class="card-img-top" :src= this.$store.state.cartemerechoisistore.img alt="Card image cap">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Taille de la carte mère {{this.$store.state.cartemerechoisistore.taille}}</li>
                    <li class="list-group-item">Socket de la carte mère :  {{this.$store.state.cartemerechoisistore.socket}}</li>
                    <li class="list-group-item">Prix : {{ this.$store.state.cartemerechoisistore.prix }} €</li>
                </ul>
                <div class="card-body">
                    <a href="#" @click="cartemereEnleve()" class="card-link">Choisir une autre carte mère</a>
                    <a href="#" @click="boitierValide()" class="card-link">Valider cette carte mère</a>
                </div> 
            </div>
        </b-card-body>
      </b-collapse>
        </b-card>
        <b-card no-body class="mb-1" v-if ="this.$store.state.ssdchoisistore != ''">
            <b-card-header header-tag="header" class="p-1" role="tab">
                <b-button block style ="background-color : white" v-b-toggle.accordion-5 variant="info">{{ this.$store.state.ssdchoisistore.text }} {{ this.$store.state.ssdchoisistore.prix }} €
                    <img class="card-img-top" style="width: 10%" :src="this.$store.state.ssdchoisistore.img" alt="Card image cap">
                    <i class="bi bi-caret-down-square-fill"></i>
                </b-button>
            </b-card-header>
        <b-collapse id="accordion-5"  accordion="my-accordion" role="tabpanel">
        <b-card-body>
            <div class="card" id="ssd"  style="width: 50%;">
                <img class="card-img-top" :src= this.$store.state.ssdchoisistore.img alt="Card image cap">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Taille du SSD : {{this.$store.state.ssdchoisistore.taille}} Go</li>
                    <li class="list-group-item">Prix : {{ this.$store.state.ssdchoisistore.prix }} €</li>
                </ul>
                <div class="card-body">
                    <a href="#" @click="ssdEnleve()" class="card-link">Choisir un autre SSD</a>
                    <a href="#" @click="boitierValide()" class="card-link">Valider ce SSD</a>
                </div> 
            </div>
        </b-card-body>
      </b-collapse>
        </b-card>
        <b-card no-body class="mb-1" v-if ="this.$store.state.cgchoisistore != ''">
            <b-card-header header-tag="header" class="p-1" role="tab">
                <b-button block style ="background-color : white" v-b-toggle.accordion-6 variant="info">{{ this.$store.state.cgchoisistore.text }} {{ this.$store.state.cgchoisistore.prix }} €
                    <img class="card-img-top" style="width: 10%" :src="this.$store.state.cgchoisistore.img" alt="Card image cap">
                    <i class="bi bi-caret-down-square-fill"></i>
                </b-button>
            </b-card-header>
        <b-collapse id="accordion-6"  accordion="my-accordion" role="tabpanel">
        <b-card-body>
            <div class="card" id="cg"  style="width: 50%;">
                <img class="card-img-top" :src= this.$store.state.cgchoisistore.img alt="Card image cap">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prix : {{ this.$store.state.cgchoisistore.prix }} €</li>
                </ul>
                <div class="card-body">
                    <a href="#" @click="cgEnleve()" class="card-link">Choisir une autre carte graphique</a>
                    <a href="#" @click="boitierValide()" class="card-link">Valider cette carte graphique</a>
                </div> 
            </div>
        </b-card-body>
      </b-collapse>
        </b-card>
        <h3 class="non" v-if="this.$store.state.prixtotalstore > 0">
            Prix Total = {{ this.$store.state.prixtotalstore }} €</h3>
    </div>
    </div>
</template>

<script>

import { IconsPlugin } from 'bootstrap-vue'
export default {

    name:"comppanier",
    components: {
        IconsPlugin
    },
    data() {
        return {

        }
    },
    created() {
    },
    methods: {
        boitierEnleve() { 
        this.$store.state.prixtotalstore = this.$store.state.prixtotalstore-parseFloat(this.$store.state.boitierchoisistore.prix)
        this.$store.state.boitierchoisistore=''
        this.$store.state.alimchoisistore=''
        },
        boitierValide(){
        },
        alimEnleve() { 
        this.$store.state.prixtotalstore = this.$store.state.prixtotalstore-parseFloat(this.$store.state.alimchoisistore.prix)
        this.$store.state.alimchoisistore=''
        },
        processeurEnleve() { 
        this.$store.state.prixtotalstore = this.$store.state.prixtotalstore-parseFloat(this.$store.state.processeurchoisistore.prix)
        this.$store.state.processeurchoisistore=''
        },
        ssdEnleve() { 
        this.$store.state.prixtotalstore = this.$store.state.prixtotalstore-parseFloat(this.$store.state.ssdchoisistore.prix)
        this.$store.state.ssdchoisistore=''
        },
        cartemereEnleve() { 
        this.$store.state.prixtotalstore = this.$store.state.prixtotalstore-parseFloat(this.$store.state.cartemerechoisistore.prix)
        this.$store.state.cartemerechoisistore=''
        },
        cgEnleve() { 
        this.$store.state.prixtotalstore = this.$store.state.prixtotalstore-parseFloat(this.$store.state.cgchoisistore.prix)
        this.$store.state.cgchoisistore=''
        },

    }
}
</script>

<style lang="css" scoped>
.p{
    margin-top:10px;
    height: 50%;
}

.prix{
    margin:10px;
    height: 50%;
}
    .panier {
    display: grid;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 30px;
    grid-template-columns: 40% 60%;
    width:80%;
    border: 1px solid black;
    border-radius: 20px;
    justify-content: center;
    text-align: center;
}
.basPanier{
    grid-column-start:1;
    grid-column-end:4;
    text-align:center;
    font-size: 1.5em;
}
.non{
    user-select: none;
       background-color: white;

}

.ulpanier {
    display: grid;

}

.lipanier {
    width:100%;
    height: 100px;
    border: 1px solid black;
    border-radius: 20px;
    display: grid;
    grid-template-columns: 60% 40%;
    /* grid-template-rows: 60% 40%; */
    font-size: 0.8rem;
}
.enleve{
    grid-row:2
}
.liconfig {
    list-style-type: none;
    display: grid;
    width: 100%;
    grid-template-columns: 60% 40%;
}
.ulpanier :hover {
    background-color: red;
    color: white;
}
.non :hover {
   background-color: white;
    color: black; 
}
.imageconfig{
    display:block;
    width:30%;
    height:auto 
}

.imageconfigbouge {
    width:50%;
    transform: translateY(200px);
    transform: translateX(-200%);
    opacity: 100%;
    /* animation-name: slidein; */
    animation: slidedansboitier 5s;
    height:auto
}



@keyframes slidedansboitier {
  from {
    width: 100%;
    transform: translateY(400px);
  }

  to {

    width: 50%;
  }
}

</style>