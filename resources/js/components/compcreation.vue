<template>
<div>
    <div class="creation">
        <h1>Création de sites internet</h1>
        <h4>Créateur autodidacte, je vous propose mes services pour la création et la maintenace de votre site internet à des prix avantageux.</h4>
  <v-card
    class="mx-auto"
    max-width="300"
    tile
  >
    <v-list dense>
      <v-subheader>Mes compétences</v-subheader>
      <v-list-item-group
        v-model="selectedItem"
        color="primary"
      >
        <v-list-item
          v-for="(item, i) in items"
          :key="i"
        >
          <v-list-item-icon>
            <v-icon v-text="item.icon"></v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title v-text="item.text"></v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list-item-group>
    </v-list>
  </v-card>

        
        
        
    </div>
</div>
</template>

<script>
export default {
    name:'Creation',
    data: () => ({
      selectedItem: 1,
      items: [
        { text: 'HTML', icon: 'mdi-clock' },
        { text: 'CSS, SASS, SCSS', icon: 'mdi-account' },
        { text: 'Php', icon: 'mdi-flag' },
        { text: 'Laravel', icon: 'mdi-flag' },
        { text: 'Base de données connectées', icon: 'mdi-flag' },
      ],
    }),
  }
</script>
}
</script>

<style scoped>
.home{
    display: grid;
    height: auto;

    grid-template-rows: 1fr 1fr 1fr;
}
.sect{
    height: auto;
    display: block;
}
.sect1{
    grid-row: 1;
}
.p{
    display: block;
        border: 1px black solid;

}
.image{
    height: 100px;
}
.logo{
    grid-column-start: 1;
    grid-row-start: 1;
    grid-row-end: 5;
        border: 1px black solid;
    width:100%;
    height: 100%;
    margin-left: 20px;
}
</style>