<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
    </head>
    <body>
        <h1>Liste de courses</h1>

        <form type="get" action="">
            <input type="text" name="keyword" placeholder="Article"/>
            <input type="text" name="value" placeholder="Quantité"/>
            <input type="submit" value="Ajouter" />
        </form>
        <br>

        <div id="list">
            <?php
            if(!empty($_GET['keyword'])){
                echo "Vous avez ajouté : ".htmlspecialchars($_GET['keyword']);
            } 
            ?>
        </div>

        <script>
            var serialize = require('serialize-javascript');
            
        </script>

    </body>
</html>