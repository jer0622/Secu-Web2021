<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        
        <h1>Liste de courses</h1>
        <input id="keyword" type="text" name="keyword" placeholder="Article"/>
        <input id="value" type="text" name="value" placeholder="Quantité"/>
        <button type="button"  onclick="tojson();">Ajouter</button>
      
        <script>
            function tojson(){
                var keyword =  document.getElementById("keyword").value;
                var value =  document.getElementById("value").value;
                var article = '{"keyword":"'+keyword+'","value":"'+value+'"}';
                console.log(article);
                var json = JSON.parse(article);
                console.log(json);
                $.ajax({
                    url: "http://siteb/Vulnerability.php",
                    type: "GET",
                    data: json,
                    contentType: "application/json",
                    dataType: "json",
                });
            }
                           
        </script>

    </body>
</html>