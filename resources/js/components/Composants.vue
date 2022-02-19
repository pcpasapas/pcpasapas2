<template>
    <div> 
        <comppanier></comppanier>
        <div class="accordion" id="accordionExample">
            <compboitier></compboitier> 
        </div>
        <div>
            <compalim></compalim>
        </div>
  <div class="accordion-item " v-if ="this.$store.state.processeurchoisistore === ''">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Processeurs
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <compprocesseur 
        :cartemere=cartemereChoisi
        @delete="deleteprocesseur">
        </compprocesseur>
      </div>
    </div>
  </div>
  <div class="accordion-item" v-if ="this.$store.state.cartemerechoisistore === ''">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapsefour">
        Cartes mères
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <compcartemere 
        :processeur=processeurChoisi
        @delete="deletecartemere">
        </compcartemere>
      </div>
    </div>
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