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
                width  : 50px;
                height : 50px;
                position: fixed;
                background : green;
            }
        </style>

        <script> 
        
            document.querySelector('#carre').style =    'width: ' +   escape("<?php if(!empty($_GET['pixel'])){ echo htmlspecialchars($_GET['pixel']);  }   ?>") +'px;' +
                                                        'height: ' +   escape("<?php if(!empty($_GET['pixel'])){ echo htmlspecialchars($_GET['pixel']);  }   ?>") + 'px;';
        
        </script>
        
    </body>
</html>

