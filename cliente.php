<?php
require_once "lib/nusoap.php";
$cliente = new nusoap_client("http://localhost/Practica04GACG/server.php");
$error = $cliente->getError();
if ($error){
    echo "<h2>Constructor error</h2> <pre>" . $error . "</pre>";
}
$result = $cliente->call("getPaises", array("datos" => "Paises"));
if ($cliente->fault) {//Chekeamos una falla al momento de llamar el método
    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
}
else { //No hay error al llamar el metodo
    $error = $cliente->getError();
    if ($error){
        echo "<h2>Error</h2><pre>" . $error . "</pre>";
    }
    else {
        echo "<h2>PAÍSES</h2><pre>";
        echo $result;
        echo "</pre>";
    }
}
?>