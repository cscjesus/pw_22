<?php

/*
 * Document   : cliente
 * Created on : 5/01/2022, 09:00:32 AM
 * Author     : liz
 * @author liz
 * https://www.youtube.com/watch?v=ye3T5bXqdDs&list=PLp7c5SFtyBcDMXX4Hau3F5aIaZd_N8sfH
 */
require_once '../nusoap.php';
/*$wsdl ="http://localhost/php_pildoras/ws/server/server.php?wsdl";
//http://localhost/pw/ws/server/server.php#
$cliente = new nusoap_client($wsdl,'wsdl');
//$error = $cliente->getError();
//if($error){
//    echo"error: $error";
//}
$param = array('amount'=>4502);
$response = $cliente->call('Servicio.calculateTax',$param);

echo"<hr>";
echo $response;
echo"<hr>";

$response = $cliente->call('Servicio.saludo');

echo"<hr>";
echo $response;
echo"<hr>";*/

//$wsdl ="http://webservices.daehosting.com/services/TemperatureConversions.wso?WSDL";
//$cliente = new nusoap_client($wsdl,'wsdl');
//
//$param = array('nCelsius'=>45);
//$response = $cliente->call('CelsiusToFahrenheit',$param);
//
//echo"<hr>";
//echo "45 grados celcius son:". $response['CelsiusToFahrenheitResult'] ." grados Fahrenheit";
//echo"<hr>";


$wsdl ="http://webservices.daehosting.com/services/ISBNService.wso?WSDL";
$cliente = new nusoap_client($wsdl,'wsdl');

//$param = array("sISBN"=>"1119864585");
$param = array("sISBN"=>"978-1119864585");
$response = $cliente->call('IsValidISBN13',$param);
//$response = $cliente->call('IsValidISBN10',$param);

echo"<hr>";
print_r($response);
//echo "45 grados celcius son:". $response['CelsiusToFahrenheitResult'] ." grados Fahrenheit";
echo"<hr>";


/*
 * lista de ligas:
 * https://jansipke.nl/examples-of-public-soap-web-services/
 * 
 * servicios
 * http://www.dneonline.com/calculator.asmx?wsdl
 * http://webservices.daehosting.com/services/
 * 
 *  https://www.youtube.com/watch?v=ye3T5bXqdDs&list=PLp7c5SFtyBcDMXX4Hau3F5aIaZd_N8sfH
 */
?>
