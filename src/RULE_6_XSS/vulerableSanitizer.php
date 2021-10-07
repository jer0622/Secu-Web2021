<?php

    $str= $_GET["message"] ;
    $str = htmlspecialchars($str); 

    $see = "<img src='".$str."' width=30% height=30%> ";
    echo $see;
 ?>
