<?php
// echo'hola mudno';
require './ejemplo3.php';
$p = new Person();

$p->setNombre('Juan');
$p->setApellido('Perez');
$p->setEdad(30);
$p->domicilio = 'Av. Ferrocarril #140';

echo json_encode($p->mostrar());
