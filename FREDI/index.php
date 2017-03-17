<?php session_start(); 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>FREDI : Frais de déplacement et remise d'impot</title>
    </head>
    <body>
        <p>Bienvenue sur la plateforme FREDI.</p>
        <input type="submit" name="nouveau" value="Nouveau bordereau" onclick="<?php include 'newBord.php'?>" />
        <div id="Content"></div>
    </body>
</html>
<script type="text/javascript">
    function newBord() {
        var div = document.getElementById("Content");
        
    }
</script>