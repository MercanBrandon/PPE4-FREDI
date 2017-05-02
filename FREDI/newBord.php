<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>FREDI : Frais de déplacement et remise d'impot</title>
    </head>
    <body>
        <form class="form" method="POST" action="connexion.php">
            <input type="date" name="date" value="">
            <input list="motif" name="motif">
              <datalist id="motif">
                  <option value="Compétition Nationale">
                  <option value="Compétition Internationale">
                  <option value="Compétition Régionale">
                  <option value="Réunion">
                  <option value="Stage">
              </datalist>
        </form>
    </body>
</html>
