<!--IL NOUS FAUT UN TEMPLATE :)-->


<!DOCTYPE html>
<html>
<body>

    
<script>
    function getName(){
        var saisie = document.getElementById("name").value;
        document.getElementById("nomClient").innerHTML = saisie;
    }
</script>

<form action="" method="get">
    <div>
      <label for="name">Enter your name: </label>
      <input type="text" name="name" id="name" required>
    </div>
    <div>
      <input type="button" onclick="getName()" value="Send !">
    </div>
  </form>


    Vous vous appelez : <div id="nomClient"></div>




</body>
</html>