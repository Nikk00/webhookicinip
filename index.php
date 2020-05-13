<?php
    $method = $_SERVER['REQUEST_METHOD'];

    if($method == "POST"){
        $respuesta = "hola mundo";
        echo json_encode($respuesta);
    }
    else{
        echo "Method not allowed";
    }
?>