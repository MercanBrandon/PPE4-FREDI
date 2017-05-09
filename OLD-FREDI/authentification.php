<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"/>
        <link rel="stylesheet" media="screen, projection" href="stylesheets/main.css" />
        <style>
@import url('https://fonts.googleapis.com/css?family=Roboto');
</style>
        <title>FREDI : Connexion</title>
    </head>
    <body>
        <div class="body-content">
          <img src="images\logo_ligue.png" alt="M2L">
          <article class="main">
            <form method="POST" action="index.php" class="form-co">
              <p><input type="email" name="email" value="" placeholder="Entrez votre adresse e-mail" width="150px"></p>
              <p><input type="password" name="password" value="" placeholder="Entrez votre mot-de-passe" width="150px"></p>
              <p><input type="submit" name="" value="Envoyer"></p>
              <p><a href="recupmail.php">Mot de passe oublié?</a></p>
            </form>
          </article>
        </div>
    </body>
</html>
