<?php
require '../Models/User.php';
require '../db/ConnectDB.php';
$db = new ConnectDB();
$usuario = new User('0596012','Juan Perez');
$sql = $usuario->selectAllUsersStr();
//crear instancia de la conexion
$db->connect();
echo json_encode($db->select($sql));

echo'<b/r>';
// <!-- jhl -->
// http://localhost/pw_22/php/spa/Controller/user_db_controller.php
//cat /var/log/apache2/error.log