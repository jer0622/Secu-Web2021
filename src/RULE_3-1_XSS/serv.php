<?php
    // Handling data in JSON format on the server-side using PHP
    //
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Methods: POST, GET");

    header("Content-Type: application/json");
    // build a PHP variable from JSON sent using GET method
    $v = json_decode(stripslashes(file_get_contents("php://input")));
    // encode the PHP variable to JSON and send it back on client-side
    echo json_encode($v);

?>