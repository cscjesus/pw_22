<?php
require '../Models/User.php';
require '../db/ConnectDB.php';
$db = new ConnectDB();
$usuario = new User('0596012','Juan Perez');

// <!-- jhl -->
// http://localhost/pw_22/php/spa/Controller/user_db_controller.php
//cat /var/log/apache2/error.logr('0596012', 'Juan Perez');
//crear instancia de la conexion
$db->connect();
//recuperar el metodo que trae la peticion
$metodo = $_SERVER['REQUEST_METHOD'];
switch ($metodo) {
    case 'GET':
        $sql = $usuario->selectAllUsersStr();
        if (isset($_REQUEST['ncontrol'])) {
            $usuario->setNcontrol($_REQUEST['ncontrol']);
            $sql = $usuario->selectUserByNcontrolStr();
        }
        echo json_encode($db->select($sql));
        break;
    case 'PUT': //obtener los datos
        parse_str(file_get_contents('php://input'), $post_vars);
        // $post_vars = json_decode(file_get_contents('php://input'));
        // echo $post_vars->ncontrol."----".$post_vars->name;
        // return;
        $ncontrol = $post_vars['ncontrol'];
        $name = $post_vars['name'];
        $usuario = new User($ncontrol, $name);
        $resultado = $db->update($usuario->updateUserStr());
        if ($resultado)
            echo 'Actualizado';
        else
            echo 'Error al actualizar';
        break;
    case 'DELETE':
        parse_str(file_get_contents('php://input'), $post_vars);
        $ncontrol = $post_vars['ncontrol'];
        $usuario = new User($ncontrol);
        $resultado = $db->delete($usuario->deleteUserStr());
        if ($resultado)
            echo 'Eliminado';
        else
            echo 'Error al elminar';
        break;
    case 'POST':
        parse_str(file_get_contents('php://input'), $post_vars);
        $ncontrol = $post_vars['ncontrol'];
        $name = $post_vars['name'];
        $usuario = new User($ncontrol, $name);
        $resultado = $db->insert($usuario->insertUserStr());
        if ($resultado)
            echo 'Agregado';
        else
            echo 'Error al agregar';
        break;
}
$db->close();
// echo'el metodo es:' . $metodo;
//


// <!-- jhl -->
// http://localhost/pw_22/php/spa/Controller/user_db_controller.php
//cat /var/log/apache2/error.log
?>