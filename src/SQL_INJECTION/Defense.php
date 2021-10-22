<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
      <title>SQL Injection</title>
    </head>

    <body>
        <h1>Service d'authentification</h1>

        <form action="" method="post">
            Pseudo : &emsp;&emsp;&emsp;<input type="text" name="uid" > <br><br>
            Mot de passe :&ensp;&nbsp;<input type="password" name="pwd" > <br><br>
            <button type="submit" name="submit">Log In</button>
        </form>

        <?php
            if (isset($_POST["submit"]) && !empty($_POST["uid"]) && !empty($_POST["pwd"])) {
                // Récupération des données des champs de connection
                $username = $_POST["uid"];
                $pwd = $_POST["pwd"];

                // Connection à la BD
                $mysqli = new mysqli("localhost", "root", "", "dbTest");

                // Vérification de la connection
                if ($mysqli -> connect_errno) {
                    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                    exit();
                }
                
                // On prépare la requête SQL
                $stmt = $mysqli->prepare("SELECT id, role FROM users WHERE username=? AND password=?");
                $stmt->bind_param("ss", $username, $pwd);

                // On exécute la requête 
                $stmt->execute();

                // On obtient les résultat de la requête
                $res = $stmt->get_result();
                $row = $res->fetch_assoc();

                // Si résultat supérieur à 0, alors identifiant correct
                if ($res->num_rows > 0) {
                    echo "<br>Identifiant correct, vous êtes désormais connecté en tant que ".$row["role"].".";
                }
                else {
                     echo "<br>Mauvais identifiant, veuillez réessayer.";
                }
                $result->close();
            }
        ?>
    </body>
</html>