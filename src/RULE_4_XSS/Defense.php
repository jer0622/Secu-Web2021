<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
    </head>
    <body>
        <h1>Voici un carré</h1>
        <p>Choisissez sa taille en pixel</p>

        <form type="get" action="">
            <input type="text" name="pixel" />
            <input type="submit" value="Changer" />
        </form>
        <br>
        <span id="carre"></span>
        <style>
            #carre {
                width  : <?php if(!empty($_GET['pixel'])){ echo htmlspecialchars($_GET['pixel']);  }   ?>px;
                height : <?php if(!empty($_GET['pixel'])){ echo htmlspecialchars($_GET['pixel']);  }   ?>px;
                position: fixed;
                background : green;
            }
        </style>
        
    </body>
</html>