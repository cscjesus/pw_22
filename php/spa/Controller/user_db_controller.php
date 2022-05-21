<?php
require '../Models/User.php';
require '../db/ConnectDB.php';

$usuario = new User('0596012','Juan Perez');
echo $usuario->deleteUserStr();
echo'<b/r>';
