<template>  
            <div>
            <h4> "Choississez votre disque dur ssd, il stockera votre système d'exploitation" </h4>
            <ul class=menuUl1>
            <li class="menuli1" v-for="(item) in menusssd_" @click="ssdok(item)">{{ item.text }}
            <p class="prix" v-if="item.prix != null"> {{ item.prix }} €</p>
            <img v-if="item.img != ''" class="image" :src= item.img>
            </li>
            </ul>
            </div>
</template>

<script>

const menusssd = [
    { 
        id: 71,
        id_supp:4,
        text_prog: "", 
        text:"Ssd 240 Go",
        prix:40,
        img: "/images/ssd240go.png"
    },
    { 
        id: 72 ,
        id_supp:4,
        text_prog: "",
        text:"Ssd 480 Go",
        prix:60, 
        img: "/images/ssd480go.jpg"
    },
    { 
        id: 73, 
        id_supp:4,
        text_prog: "",
        text:"Ssd 1 To",
        prix:100,
        img: "/images/ssd1to.png"
    },
    { 
        id: 74 , 
        id_supp:4,
        text_prog: "",
        text:"Ssd 2 To",
        prix:250,
        img: "/images/ssd2to.jpg"
    },
]
export default {
    name: 'compssd', 
    props: {
        id:Number,
        // menusssd: {
        //     default: menusssd
        // }
    },
    data () {
      return {
          menusssd_:menusssd,
      }
    },
    methods: {
        ssdok(item) {
            console.log(item)
            this.$store.commit('UPDATE_SSD',item)
            this.$store.commit('UPDATE_PRIX', item.prix)
        }
    }
}   
</script>
