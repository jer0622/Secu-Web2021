<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
    </head>
    <body>
        <h1>Voici un carré</h1>
        <p>Choisissez l'url d'une photo à mettre dans ce jolie carré</p>

        <?php 
           $url ="" ; if(!empty($_GET['url'])){ $url =  htmlspecialchars($_GET['url']);  }
        ?>

        <form type="get" action="">
            <input type="text" name="url" />
            <input type="submit" value="Changer" />
        </form>
        <br>
        <span id="carre"></span>
        <style>
            #carre {
                height : 400px;
                width : 400px; 
                position: fixed;
                background-image:url("<?php echo $url ?>");
                background-position:center center;
                border-width:6px;
                border-style:dotted;
                border-color:black;
            }

        </style>
        
    </body>
</html>