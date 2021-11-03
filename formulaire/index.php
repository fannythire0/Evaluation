<?php include('conf.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">     
  </head>

  <body>
    <?php 
      session_start(); 
      require_once('gestionBDD.php'); 
    ?>

<!-- __________________________________ Bannière du site ______________________________________ -->

    <div class="container">
      <div class="notification is-success">
        <section class="section">
          <h1 class="title has-text-black">Inscription</h1>
          <h2 class="subtitle has-text-black">Compléter ce formulaire afin de valider l'inscription.</h2>
        </section>
      </div>
    </div>
    <br>
    <br>

<!-- __________________________________ Formulaire d'inscription ______________________________________ -->

    <form method ="post" action ="inscri.php">
      <div class="columns is-mobile">
        <div class="column is-half is-offset-one-fifth">
          <div class="field">
            <label class="label">Login :</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-dark" name="login" type="text" placeholder="Votre login de connexion" value="">
            </div>
          </div>
          <div class="field">
            <label class="label">Mot de passe :</label>
            <p class="control has-icons-left">
              <input class="input is-dark"  name="password" type="password" placeholder="Votre mot de passe">
            </p>
          </div>
          <div class="field">
            <label class="label">Confirmation mot de passe :</label>
            <p class="control has-icons-left">
              <input class="input is-dark" name="password2" type="password" placeholder="Votre mot de passe">
            </p>
          </div>
          <div class="field is-grouped">
            <div class="control">
              <button class="button is-success has-text-black">Valider</button>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
    </form>
  </body>
</html>