<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
    </head>
    <body>

        <h1>Vous allez voir un carré</h1>
     
            
        <p>Choisissez sa taille en pixel</p>
        

        <form type="get" action="">
            <input type="text" name="pixel" />
            
            <?php
                
                if(!empty($_GET['pixel'])){ 
                    $monUrl = "http://secuxss0/template.php?value=".htmlspecialchars($_GET['pixel']); 
                    echo '<a href="'. $monUrl.'">Voir le carré</a>';
                }else {
                    $monUrl = "http://secuxss0/template.php?value=";
                    echo "<input type='submit' value='Valider la taille' />"; 
                }
                $pixel = 0;
                if(!empty($_GET['value'])){$pixel = htmlspecialchars($_GET['value']);}
            ?>
        </form>
        <br>

        <span id="carre"></span>
        <style>
            #carre {
                width  : <?php echo $pixel; ?>px;
                height : <?php echo $pixel; ?>px;
                position: fixed;
                background : green;
            }
        </style>
        
    </body>
</html>