<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
    </head>
    <body>
        <h1>Voici une pomme</h1>
        <p>Mais vous pouvez choisir à quoi cette pomme ressemblera en changeant l'image :) !</p>
        <form type="get" action="">
            <input type="text" name="link" />
            <input type="submit" value="Choisir la photo" />            
        </form>

        <?php if(!empty($_GET['link'])){ $link = $_GET['link'];}else{ $link="https://st2.depositphotos.com/7036298/10694/i/600/depositphotos_106948346-stock-photo-ripe-red-apple-with-green.jpg"; } 
              $link = str_replace(array("'", "\"", "&quot;"), "", htmlspecialchars($link ) );  ?>

        <img src="<?php echo $link?>" id="pomme" width="300px"></img>


    </body>
</html>
