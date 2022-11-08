<?php
$usuario = htmlentities(addslashes($_POST['usu']));
$pass = htmlentities(addslashes($_POST['contra']));
//cifrar contrasena
$pass_cifrado = password_hash($pass, PASSWORD_DEFAULT);
//echo $usuario . "  " . $pass_cifrado;
try {
    $conexion = new mysqli('localhost', 'admin', '9hmV7ue2wkqfXd5', 'test');
    if (mysqli_connect_errno()) {
        echo 'Error al conectar';
        exit();
    }
    $conexion->set_charset('utf8'); //para aceptar acentos
    $sql = "INSERT INTO usuarios_pass(usuario,password) VALUES(" .
        "'$usuario','$pass_cifrado')";
    $resultado = $conexion->query($sql);
    echo $resultado ? "Registro satisfactorio" : "Error: " .
        $conexion->error;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    $conexion->close();
}



//mysql -u root -p --socket=/opt/lampp/var/mysql/mysql.sock

/*

CREATE TABLE `usuarios_pass` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

*/
// <!-- jhl -->
