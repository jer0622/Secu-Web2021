<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
      <title>XXE</title>
    </head>
    <body>
        <h1>Votre base de données</h1>
        <h3>Veuillez ajouter des données au format XML (Exemple : &ltname&gtJean&lt/name&gt)</h3>

        <form action="" method="post">
            <textarea style="width: 50%; height: 4%;" rows="10" cols="33" maxlength="1000" name="data"></textarea><br>
            <input type="submit" value="Ajouter" name="submit" />
        </form><br><br>

        <?php
            if (isset($_POST["submit"]) && !empty($_POST["data"])) {
                $xmlfile = $_POST["data"];

                libxml_disable_entity_loader(true);
                $dom = new DOMDocument();
                $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);

                $contenu = simplexml_import_dom($dom);
                
                echo 'Vous avez ajouté :<pre>';
                print_r($contenu);
                echo '</pre>';
            }
        ?>
    </body>
</html>