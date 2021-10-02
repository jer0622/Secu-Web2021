<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
    </head>
    <body>
        <h1>Liste de courses</h1>

        <form type="get" action="">
            <input type="text" name="keyword" />
            <input type="submit" onClick="test();" value="Ajouter" />
        </form>
        <br>

        <div id="list">
            <?php
            if(!empty($_GET['keyword']))
            {
            ?>

            <?php
                echo "Vous avez ajouté : ".htmlspecialchars($_GET['keyword']);
            } 
            ?>
        </div>

    </body>
</html>