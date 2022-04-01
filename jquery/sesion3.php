<?php
if(!isset($_REQUEST['nombre'])){
    echo 'Hola desde PHP utilizando AJAX';
    return;
}
//nombre es una caja de texto que tiene como name='nombre'
$nombre = $_REQUEST['nombre'];
$ap = $_REQUEST['ap'];

echo 'Informacion recibida desde una peticion AJAX<br/>';
echo "Nombre: $nombre, apellido: $ap";