<script>
// Vue.component('logo-component', require('./LogoComponent.vue').default);
import Logo_ from './LogoComponent.vue'
import TitreMenu from './TitreMenuComponent.vue'
// import comppanier from './src/components/comppanier.vue'
// import compannonce from './src/components/compannonce.vue'
// import router from '../router'
// import axios from 'axios'

export default {
  name:'Home',
  components: {
    Logo_,
    TitreMenu,
    // router,
    // comppanier,
    // compannonce
  },
  data: (function () {
    return {
      menus: [],
      data:[]
    }
  }),
  mounted() {
  }
}


</script>
<template>
  <div>
  <h5>Contenu modifié le 20/02 à 10:02</h5>
  <Logo_></Logo_>
  <!-- <logo-component></logo-component> -->
  <TitreMenu></TitreMenu>
  <!-- <router-link to='/'><button>Retour à l'acceuil</button></router-link>
  <button a @click="$router.go(-1)">Etape précédente</button> -->
  <!-- <comppanier></comppanier> -->
  <router-view></router-view>
  <a href="http://www.mon-compteur.fr"><img src="http://www.mon-compteur.fr/html_c01genv2-234181-6" border="0" /></a>
</div>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 0px;
}
</style>
