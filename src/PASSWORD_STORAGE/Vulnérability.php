<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
      <title>Password Storage</title>
    </head>
    
    <body>
        <h1>Inscription</h1>

        <form action="" method="post">
            Pseudo : &emsp;&emsp;&emsp;<input type="text" name="uid" > <br><br>
            Mot de passe :&ensp;&nbsp;<input type="password" name="pwd" > <br><br>
            <button type="submit" name="submit">Valider</button>
        </form>
        <br>

        <?php
            if (isset($_POST["submit"]) && !empty($_POST["uid"]) && !empty($_POST["pwd"])) {
                $username = $_POST["uid"];
                $password = $_POST["pwd"];

                echo "Votre mot de passe à été stocké de cette manière : ".hash("sha256", $password);
            }
        ?>
    </body>
</html>
