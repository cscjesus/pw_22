<?php
$usuario = htmlentities(addslashes($_POST['usuario']));
$pass = htmlentities(addslashes($_POST['password']));
try {
    $conexion = new mysqli('localhost', 'admin', 'Adm1n_', 'test');
    if (mysqli_connect_errno()) {
        echo 'Error al conectar';
        exit();
    }
    $conexion->set_charset('utf8'); //para aceptar acentos
    $sql = "SELECT * FROM usuarios_pass WHERE usuario='$usuario'";
    $resultado = $conexion->query($sql);
    if($resultado->num_rows>0){
        $existente = false;
        while($fila = $resultado->fetch_assoc()){
            // $fila=["id"=>1,"usuario"=>"juan","password"="klksldio98"]
            if(password_verify($pass,$fila["password"])){
                $existente =true;
            }
        }
        if($existente)
            echo"Sesion iniciada correctamente";//redirigir....
        else
            echo"Password errornea";//redirigir a login.html
    }else{
        echo "Error al iniciar sesion (usuario no existente)";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    $conexion->close();
}



//mysql -u root -p --socket=/opt/lampp/var/mysql/mysql.sock

/*

CREATE TABLE `usuarios_pass` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

*/