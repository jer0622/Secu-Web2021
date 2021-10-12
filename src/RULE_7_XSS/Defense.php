<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
    </head>
    <body>
        <h1>Cliquez pour vous y rendre</h1>
        <div id="list">
            <a id="link" href="">Site</a> 
        </div>
        <br>
        <script>
            var url = prompt("Entrez l'url du site sur lequel vous souhaitez vous rendre");
            //var result = toString(url.protocol); // Retourne:"https:"
            //console.log(result);
            if(validURL(url)){
                document.getElementById('link').href=url;
            }else{
                url =""
                alert("Protection XSS, lien non conforme supprimé");
                var parentElement = document.getElementById("list");
                var imgElement = document.getElementById('link');
                parentElement.removeChild(imgElement);
            }

            function validURL(str) {
                var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
                    '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
                    '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
                    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
                    '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
                    '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
                return !!pattern.test(str);
            }
        </script>
    </body>
</html>
