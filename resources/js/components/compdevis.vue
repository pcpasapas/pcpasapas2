<template>
    <div> 
        <form action="mail.php" method="post" enctype="text/plain">>
  <div class="form-group">
    <label for="exampleFormControlInput1">Votre adresse mail :</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Votre devis concerne :</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Dépannage / Récupération de données</option>
      <option>Montage Pc complet</option>
      <option>Achat de pièces détachées</option>
      <option>Création de sites internet</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
          <input type="submit" />
</form>
        </div>
</template>

<script>





export default {
    name: 'Devis',
    props: [],
    data() {
        return {
        }},
    computed: {
    },
    methods: {
    }

}
</script>

<style lang="css">
    
</style>