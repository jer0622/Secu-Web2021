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

            <?php 
            $taille= "";
            if(!empty($_GET['pixel'])){ 
                $taille = htmlspecialchars($_GET['pixel']);
                $taille = preg_replace('#\'#','&apos;',$taille);    // Change [ ' ] To [ &apos; ]
                $taille = preg_replace('#\"#','&quot;',$taille);    // Change [ " ] To [ &quot; ]
                $taille = preg_replace('#\\\\#','',$taille);   // To remove [ \ ]
                $taille = htmlspecialchars($taille);  
            }
            ?>
        <script> 
            var taille =  "<?php echo $taille ?>"
            document.querySelector('#carre').style =    'width: ' + taille  +'px;' +
                                                        'height: ' +   taille + 'px;';
        
        </script>
        
    </body>
</html>

