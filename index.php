<?php
    $method = $_SERVER['REQUEST_METHOD'];

    if($method == "POST"){
        $texto = "hola mundo";
        $respuesta = new \stdClass();
        $respuesta->speech = "";
        $respuesta->displayText = "";
        $respuesta->source = "webhook";
        echo json_encode($respuesta);
    }
    else{
        echo "Method not allowed";
    }
?>