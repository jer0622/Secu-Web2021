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

    $str= $_GET["message"] ;
 
    $str = preg_replace('#\'#','&apos;',$str);    // Change [ ' ] To [ &apos; ]
    $str = preg_replace('#\"#','&quot;',$str);    // Change [ " ] To [ &quot; ]
    $str = preg_replace('#\\\\#','',$str);   // To remove [ \ ]
    $str = htmlspecialchars($str); // or $str = htmlentities($str);

    //or only : $src = htmlspecialchars($_GET['message'] , ENT_QUOTES);

    $see = "<img src='".$str."' width=30% height=30%> ";
    echo $see;
 ?>


</div>
</body>
</html>