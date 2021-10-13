<html>

<head>



 <script>
   function save(){ 
        var callback = function () {     
        var show=document.getElementById("show"); 
	      show.innerHTML= xmlhttp.responseText;       
     } ; 
     var input=document.getElementById("message").value;
     var url = "<?php echo $_SERVER['PHP_SELF'] ;?>"+"?message="+input;
     var xmlhttp = new XMLHttpRequest();	    
     xmlhttp.open('GET',url, true);
     xmlhttp.onreadystatechange = callback;
     xmlhttp.send(null);      
 } 
</script>

</head>
<body>
<h1>Welcome to our Guest Book, Leave us a Message PLEASEEEEEEEEEEEEEEE! </h1>
<form method="GET">
<input  id="message" name="message">
<input type="submit" value="Leave a message">
<form>
<h2>All the messages left by guests </h2>
<div id="show">


<?php
    if(!empty($_GET['message'])){ 
        $str= $_GET["message"] ; 
        $str = htmlspecialchars($str); 
        $see = "<img src='".$str."' width=30% height=30%> ";
        echo $see;
    } 
    
 ?>

</div>
</body>
</html>