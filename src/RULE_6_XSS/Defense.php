<html>

<head>

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

include('./htmlpurifier-4.13.0/library/HTMLPurifier.auto.php');
$purifierConfig = HTMLPurifier_Config::createDefault();
$purifierConfig->set('Core.Encoding', 'UTF-8');
$purifierConfig->set('HTML.Allowed', 'a[href|title],img[title|src|alt],em,strong,cite,blockquote,code,ul,ol,li,dl,dt,dd,p,br,h1,h2,h3,h4,h5,h6,span,*[style]');
$purifier = new HTMLPurifier($purifierConfig);

if(!empty($_GET['message'])){ 

    $str= $_GET["message"] ;
    $see = "<img src='".$str."' width=30% height=30%> ";
    echo $purifier->purify($see);
}
?>

</div>
</body>
</html>