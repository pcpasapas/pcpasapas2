<template>  
            <div>
            <h4> "Choississez votre carte mère, elle reliera tous les élements entres eux à l'interieur de votre boitier" </h4>
            <ul class=menuUl1>
            <li class="menuli1" 
            v-for="(item) in menuscartemere_" 
            v-on:click="click(item,item.id)">{{ item.text }}
            <p>{{item.socket}}</p>
            <p class="prix" v-if="item.prix != null"> {{ item.prix }} €</p>
            <img v-if="item.img != ''" class="image" :src= item.img>
            </li>
            </ul>
            </div>
</template>

<script>

const menuscartemere = [
    { id: 61, text:"Carte mère GIGABYTE b550M", format:"atx", socket: "am4", ram:"ddr4", cg:false, prix:90, img: "/images/cmgigabyte.jpg"},
    { id :62, text:"Carte mère ASUS B365M-K", format:"mAtx", socket:"lga1151", ram:"ddr4", cg:true, prix:80, img:"/images/cmasus.jpg"},
    { id :63, text:"Carte mère Gigabyte H410M S2H V3", format:"mAtx", socket:"intel1200", ram:"ddr4", cg:false, prix:80, usb:6, img:"/images/cmh410.jpg"},
]
export default {
    name: 'compcartemere', 
    props: {
        id:Number,
        processeur:"",
        // menuscartemere: {
        //     default: menuscartemere
        // }
    },
    data () {
      return {
          menuscartemere_: menuscartemere
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
        }
    },
    updated() {
        this.menuscartemere_ = this.menuscartemere_.filter (obj => obj.socket === this.processeur.socket);   
    },
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

