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

  <div class="accordion-item" v-if ="this.$store.state.ssdchoisistore === ''">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapsefour">
        SSD
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            <compssd></compssd>
      </div>
    </div>
  </div>
</div>  

        <!-- <compcg v-if ="this.$store.state.cgchoisistore ===''"></compcg>
    </div> -->
</template>

<script>
import compcg from '../components/compcg.vue'
import comppanier from '../components/comppanier.vue'
import compprocesseur from "../components/compprocesseur.vue"
import compcartemere from "../components/compcartemere.vue"
import compboitier from "../components/compboitier.vue"
import compalim from "../components/compalim.vue"
import compssd from '../components/compssd.vue'




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
    compcg
  }
}
</script>

<style lang="css">
    .accordion-body{
    padding: 0px;
}
</style>