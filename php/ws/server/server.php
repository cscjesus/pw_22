<?php

require_once '../nusoap.php';
/*
 * Document   : server
 * Created on : 5/01/2022, 08:34:45 AM
 * Author     : liz
 * @author liz
 */
$ns = "https://localhost/php_pildoras/ws/server/server.php";
$server = new soap_server();
$server->configureWSDL('TaxCalculator', $ns);
$server->wsdl->schemaTargetNamespace = $ns;

$server->register('Servicio.saludo', array(), array('resultado' => 'xsd:string'), $ns);
$server->register('Servicio.calculateTax', array('amount' => 'xsd:double'), array('resultado' => 'xsd:double'), $ns);

class Servicio {

    function calculateTax($amount) {
        $tax = $amount * 1.16;
        return new soapval('resultado', 'xsd:double', $tax);
    }
    function saludo()
    {
         return new soapval('resultado', 'xsd:string', "Hola mundo");;
    }
}

//$server->service($HTTP_RAW_POST_DATA)
// Use the request to invoke the service
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : file_get_contents("php://input");
$server->service($HTTP_RAW_POST_DATA);
//$server->service(file_get_contents("php://input"));

//The wsdl is rpc encoded. To process this wsdl install the "JAX-RPC Web Services" plugin.
?>