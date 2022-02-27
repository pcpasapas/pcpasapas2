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
          <option selected>Dépannage / Récupération de données</option>
          <option>Montage Pc Complet</option>
          <option>Achat de pièces détachées</option>
          <option>Création de sites internet</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label>Informations supplémentaires </label>
        <textarea name="message"></textarea>
      </div>
    </div>
  </form>
</div>
</template>

<script>
import emailjs from '@emailjs/browser';

export default {
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