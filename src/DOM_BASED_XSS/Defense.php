<?php


$name = "username";
$value = "Ossama";
$expires = time() + (86400 * 30) ;//30 days

setcookie($name , $value , $expires );

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
      <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>
      <script src="./bundle.js"></script>
    </head>
    <body>

      <h1>DOM BASED XSS DEMO</h1>
      <div id="result" >Fail</div>

      <script >
        var num = document.URL.split("num=")[1];
        
        document.querySelector("#result").innerHTML =  ESAPI.encoder().encodeForJavaScript(ESAPI.encoder().encodeForHTML(num));
        
      </script>
        
        
    </body>
</html>