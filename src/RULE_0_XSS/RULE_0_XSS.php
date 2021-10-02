<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
    </head>
    <body>
        <h1>Mon super moteur de recherche</h1>

        <?php
        if(!empty($_GET['keyword']))
        {
            echo "Résultat(s) pour le mot-clé : ".$_GET['keyword'];
        } 
        ?>
        <div class="fl" style="width: 99%;">
		
		<h1>Search Results</h1>
		
		<p>No results were found for the query:<br><script>alert("BitE")</script><br>
		
		
		
		</p></div>
        <form type="get" action="">
            <input type="text" name="keyword" />
            <input type="submit" value="Rechercher" />
        </form>
    </body>
</html>