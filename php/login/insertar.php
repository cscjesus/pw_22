<?php
$usuario = htmlentities(addslashes($_POST['usu']));
$pass = htmlentities(addslashes($_POST['contra']));
//cifrar contrasena
$pass_cifrado = password_hash($pass, PASSWORD_DEFAULT);
//echo $usuario . "  " . $pass_cifrado;
try {
    $conexion = new mysqli('localhost','root','','test');
    if(mysqli_connect_errno()){
        echo 'Error al conectar';
        exit();
    }
    $conexion->set_charset('utf8');//para aceptar acentos
    $sql = "INSERT INTO usuarios_pass(usuario,password) VALUES(".
    "'$usuario','$pass_cifrado')";
    $resultado = $conexion->query($sql);
    if($resultado)
        echo"Registro satisfactorio";
    else
        echo"Error: ".$conexion->error;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    $conexion->close();
}



//mysql -u root -p --socket=/opt/lampp/var/mysql/mysql.sock