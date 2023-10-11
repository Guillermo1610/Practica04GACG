<?php
    require_once "lib/nusoap.php";
    function getPaises($datos) {
        if ($datos == "Paises"){
            return join(",", array(
                "México",
                "Estados Unidos",
                "Portugal",
                "Dinamarca",
                "Jamaica",
                "España",
                "Brasil"));
        }
        else  {
                return "No hay Paises";
        }
    }
    $server = new soap_server(); //Se crea la instancia de SOAP
    $server->register("getPaises"); // Indica el método o función a devolver
    if ( !isset( $HTTP_RAW_POST_DATA) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
        $server->service($HTTP_RAW_POST_DATA);
?>