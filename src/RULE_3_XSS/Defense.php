<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
    </head>
    <body>
        <h1>Liste de courses</h1>

        <script>
            if(
            <?php if(!empty($_GET['keyword'])){
                echo true; 
            }else {
                    echo false;
                }
            ?>
            ){
                
                x= "<?php echo htmlspecialchars($_GET['keyword']) ?>" ;
                alert(x);
            } 
                
        </script>
        
        <form type="get" action="">
            <input type="text" name="keyword" />
            <input type="submit"  value="Ajouter" />
        </form>
        <br>

       
    </body>
</html>
