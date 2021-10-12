<?php
    if(!empty($_GET['name'])){
        $name = $_GET['name'];
        setcookie("name", $name, time()+3000, null, null, false, true);
    }
    
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
      <title>Session Management 1</title>
    </head>
    
    <body>

        <?php
            if (!empty($_GET['name'])) {
                echo "<h1>Bonjour ".$_GET["name"]." voici votre liste de courses</h1>
                <form type='get' action=''>
                <input type='text' name='keyword' />
                <input type='hidden' name='name' value='".$_GET['name']."' />
                <input type='submit' value='Ajouter' /></form>";

                if (!empty($_GET['keyword'])){
                    echo "<br>Vous avez ajouté : ".$_GET['keyword'];
                } 
            }
            else {
                echo "<h1>Veuillez entrer votre nom</h1>
                <form type='get' action=''>
                <input type='text' name='name'/>
                <input type='submit' value='Valider'/>
                </form>";
            }
        ?>
    </body>
</html>
