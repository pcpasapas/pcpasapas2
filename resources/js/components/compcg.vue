<template>  
            <div>
            <h4> "Choississez votre carte graphique" </h4>
            <ul class=menuUl1>
            <li class="menuli1" v-for="(item) in menuscg_" :key='item.id' @click="cgok(item)">{{ item.text }}
            <p class="prix" v-if="item.prix != null"> {{ item.prix }} €</p>
            <img v-if="item.img != ''" class="image" :src= item.img>
            </li>
            </ul>
            </div>
</template>

<script>

// import store from '../store/index'
export default {
    // eslint-disable-next-line vue/multi-word-component-names
    name: 'compcg', 
    props: {
        id:Number
        }, 

    methods: {
        cgok(item) {
            console.log(item)
            this.$store.commit('UPDATE_CG',item)
            this.$store.commit('UPDATE_PRIX', item.prix)
            // this.$emit('boitierChoisi', {message: item})

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

