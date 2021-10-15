<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script  src="./bundle.js"></script>
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
                var url ="http://origin2:80/serv.php" 
                xhr.open("POST", url, true);
                xhr.setRequestHeader('Access-Control-Allow-Origin','*');
                xhr.setRequestHeader('Access-Control-Allow-Methods','POST, GET'); 
                xhr.setRequestHeader("Content-Type", "application/json");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var json = JSON.parse(xhr.responseText);
                        document.getElementById("article").innerHTML = json.keyword;
                        document.getElementById("nombre").innerHTML = json.value;
                    }
                };
                var data = serialize({"keyword": keyword, "value": value});
                //data = JSON.stringify(data);
                xhr.send(data);
            }
                           
        </script>

    </body>
</html>