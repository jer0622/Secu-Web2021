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
      

        <div id="list">
            L'article : <p id="article"></p> a bien été ajouté 
            en quantité : <p id="nombre"></p>
        </div>

        <script>
            var list = document.getElementById("list");
            function tojson(){
                var keyword =  document.getElementById("keyword").value;
                var value = document.getElementById("value").value;
                var xhr = new XMLHttpRequest();
                var url ="http://secuxss0/serv.php" 
                xhr.open("POST", url, true);
                xhr.setRequestHeader('Access-Control-Allow-Origin','*');
                xhr.setRequestHeader("Content-Type", "application/json");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var serialize = require('serialize-javascript');
                        var json = JSON.parse(xhr.responseText);
                        serialize(json);
                        document.getElementById("article").innerHTML = json.keyword;
                        document.getElementById("nombre").innerHTML = json.value;
                    }
                };
                var data = JSON.stringify({"keyword": keyword, "value": value});
                xhr.send(data);
            }
                           
        </script>

    </body>
</html>