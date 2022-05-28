<?php
header("Content-Type: application/JSON");

$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case'GET':
        $name = $_GET['name'];
        echo 'ahora estas en cliente.php';
        echo '<br>nombre del cliente: ' . $name;
        break;
    case'POST':
        $data = file_get_contents('php://input');
        $valores = json_decode($data, true);
        echo json_encode($valores);
        break;
    case'PUT':
        $data = file_get_contents('php://input');
        $valores = json_decode($data, true);
        echo json_encode($valores);
        break;
    case'DELETE':
        echo'DELETE';
        break;
    default :
        echo 'METODO NO SOPORTADO';
        break;
}
