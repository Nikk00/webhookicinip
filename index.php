<?php
    $method = $_SERVER['REQUEST_METHOD'];

    if($method == "POST"){
        $requestBody = file_get_contents('php://input');
        $json = json_decode($requestBody);

        $text = $json->result->parameters->text;
        switch($text){
            case 'aq':
                $speech = "Hi, nice to meet you";
                break;
            case 'bye':
                $speech = "bye,good night";
                break;
            case 'anything':
                $speech = "yes, you can type anything here.";
                break;
            default:
                $speech = "Sorry";
                break;
        }

        $response = new \stdClass();
        $response->speech = "";
        $response->displayText = "";
        $response->source = "webhook";
        echo json_encode($response);
    }
    else{
        echo "Method not allowed";
    }
?>