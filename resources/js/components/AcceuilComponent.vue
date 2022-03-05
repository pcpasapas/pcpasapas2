<script>
import Logo_ from './LogoComponent.vue'
import TitreMenu from './TitreMenuComponent.vue'

export default {
  name:'Home',
  components: {
    Logo_,
    TitreMenu,
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
  <h5>Contenu modifié le 28/02 à 17:53  </h5>
  <Logo_></Logo_>
  <TitreMenu></TitreMenu>
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
