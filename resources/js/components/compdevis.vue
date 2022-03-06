<template>
<div>
  <form ref="form" @submit.prevent="sendEmail">
    <div class="row">
      <div class="col">
        <label>Nom : </label>
        <input type="text" class="form-control" placeholder="Nom">
      </div>
      <div class="col">
        <label>Prénom : </label>
        <input type="text" class="form-control" placeholder="Prénom" name="user_name">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Votre adresse E-mail : </label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="user_email">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Ville : </label>
        <input type="text" class="form-control" id="inputCity" name="user_city">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Code postal : </label>
        <input type="text" class="form-control" id="inputZip" name="user_zip">
      </div>
      <div class="col-auto my-1">
        <label class="mr-sm-2" for="inlineFormCustomSelect">Votre demande concerne :</label>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
          <option>Dépannage / Récupération de données</option>
          <option selected>Montage Pc Complet</option>
          <option>Achat de pièces détachées</option>
          <option>Création de sites internet</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label>Informations supplémentaires </label>
        <textarea name="message"></textarea>
      </div>
      <div class="form-group col-md-2">
        <label>Votre configuration choisie :  </label>
      </div>
    </div>
  </form>
  <div v-if="this.$store.state.boitierchoisistore !=''">
    <b-form-group
      id="fieldset-horizontal"
      label-cols-sm="4"
      label-cols-lg="3"
      content-cols-sm
      content-cols-lg="7"
      label="Votre Boitier : "
      label-for="select-horizontal"
    >
      <b-form-select disabled v-model="selected" :options="optionsBoitier" id="select-horizontal"></b-form-select>
    </b-form-group>
  </div>
  <div v-if="this.$store.state.alimchoisistore !=''">
    <b-form-group
      id="fieldset-horizontal"
      label-cols-sm="4"
      label-cols-lg="3"
      content-cols-sm
      content-cols-lg="7"
      label="Votre Alimentation : "
      label-for="select-horizontal"
    >
      <b-form-select disabled v-model="selected" :options="optionsAlim" id="select-horizontal"></b-form-select>
    </b-form-group>
  </div>
</div>
</template>

<script>
import emailjs from '@emailjs/browser';

export default {
  data() {
    return {
      selected: 'a',
      optionsBoitier : [
        { value: 'a', text: this.$store.state.boitierchoisistore.text + this.$store.state.boitierchoisistore.prix + " €"},
      ],
      optionsAlim : [
        { value: 'a', text: this.$store.state.alimchoisistore.text + this.$store.state.alimchoisistore.prix + " €"},
      ]
    }
  },
  methods: {
    sendEmail() {
      emailjs.sendForm('service_y8whgsv', 'template_8ijl6oj', this.$refs.form, 'user_uNtiX5dqwGSZwrnzZXWZh')
        .then((result) => {
            console.log('SUCCESS!', result.text);
        }, (error) => {
            console.log('FAILED...', error.text);
        });
    }
  }
}
</script>