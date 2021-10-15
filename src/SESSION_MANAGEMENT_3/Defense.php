<?php
    // On démarre une nouvelle session
    $sess_name = session_name();
    if (session_start()) {
        // Attribut Secure => true, HttpOnly => true
        setcookie($sess_name, session_id(), null, '/', null, true, true);
    }
    
    // id de session
    $id_session = session_id();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Session Management - Attribut Secure</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Service d'authentification</h1>
        <?php
            if($id_session){
                echo "Votre ID de session est : ".$id_session."<br><br>
                L'attribut secure est sur true, une personne malintentionnée 
                ne peut donc pas capturer les cookies si vous êtes sur https";
            }
        ?>
    </body>
</html>