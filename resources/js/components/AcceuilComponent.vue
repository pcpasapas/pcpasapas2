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
      data:[],
      v0: true,
    }
  }),
  mounted() {
  }
}


</script>
<template>
  <div>
    <v-checkbox
      v-model="v0"
      label="Cacher les infos de developpement"
    ></v-checkbox>
    <v-banner
      v-model="v0"
      single-line
      transition="slide-y-transition"
    >
  <h5>Contenu modifié le 30/03 à 08:54  </h5>
  <h5> Les visiteurs en tests peuvent créer un compte et se connecter en cliquant sur mon compte</h5>
    </v-banner>
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
