<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
    </head>
    <body>

        <h1>Vous allez voir un carré</h1>
        <?php
                
                if(!empty($_GET['pixel'])){ 
                    echo "Vous avez choisit la taille : ".htmlspecialchars($_GET['pixel']);
                    $monUrl = "http://secuxss0/template.php?value=".htmlspecialchars($_GET['pixel']);
                }else {
                    echo "Vous n'avez pas encore validé de taille"; 
                    $monUrl = "http://secuxss0/template.php?value=";
                }
                
            ?>
            
        <p>Choisissez sa taille en pixel</p>

        <form type="get" action="">
            <input type="text" name="pixel" />
            <br>
            <input type="submit" value="Valider la taille" />
            
            <br>
            <a href="<?php echo $monUrl ?>">Voir le carré</a>
        </form>
        <br>

        <span id="carre"></span>
        <style>
            #carre {
                width  : <?php if(!empty($_GET['value'])){ echo htmlspecialchars($_GET['value']);}?>px;
                height : <?php if(!empty($_GET['value'])){ echo htmlspecialchars($_GET['value']);}?>px;
                position: fixed;
                background : green;
            }
        </style>
        
    </body>
</html>