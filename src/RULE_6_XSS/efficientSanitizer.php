<?php

    $str= $_GET["message"] ;
 
    $str = preg_replace('#\'#','&apos;',$str);    // Change [ ' ] To [ &apos; ]
    $str = preg_replace('#\\\\#','',$str);   // To remove [ \ ]
    $str = htmlspecialchars($str); // or $str = htmlentities($str);

    //or only : $src = htmlspecialchars($_GET['message'] , ENT_QUOTES);

    $see = "<img src='".$str."' width=30% height=30%> ";
    echo $see;
 ?>
