<template>
    <div> 
        <comppanier></comppanier>
        <div class="accordion" id="accordionExample">
            <compboitier></compboitier> 
        </div>
        <div>
            <compalim v-if="this.$store.state.boitierchoisistore.alim != 'oui'"></compalim>
        </div>
        <div>
            <compprocesseur></compprocesseur>
        </div>
        <div>
            <compcartemere></compcartemere> 
        </div>
        <div>
            <compssd></compssd>
        </div>
        <div>
          <compcg></compcg>
        </div>
        <div>
            <compram></compram>
        </div>
</div>  
</template>

<script>
import compcg from '../components/compcg.vue' 
import comppanier from '../components/comppanier.vue'
import compprocesseur from "../components/compprocesseur.vue"
import compcartemere from "../components/compcartemere.vue"
import compboitier from "../components/compboitier.vue"
import compalim from "../components/compalim.vue"
import compssd from '../components/compssd.vue'
import compram from '../components/compram.vue'




export default {
    name: 'MontageView',
    props: ['id', 'index'],
    data() {
        return {
            name: "composants",
            boitierChoisi:"",
            processeurChoisi:"",
            alimChoisi:"",
            ssdChoisi:"",
            cartemereChoisi:"",
            prixTotal:0,
            item:"tester",
        }},
    computed: {
    },
    methods: {
        alim() {
            this.$emit('update')
        },
        deleteAlim(item) {
            this.alimChoisi = item
            },
        deletecartemere(item) {
            this.cartemereChoisi = item
        },
        deleteprocesseur(item) {
            this.processeurChoisi = item
        }
        
        },    
    created() {
        
    },

    components: {
    compprocesseur,
    compcartemere,
    compboitier,
    compalim,
    compssd,
    comppanier,
    compcg,
    compram
  }
}
</script>

<style lang="css">
    .accordion-body{
    padding: 0px;
}
</style>