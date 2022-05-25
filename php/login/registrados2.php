<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start(); //reanudar sesion
    if (isset($_SESSION['usuario']) == false) {
        header('location:login.html');
    }
    //fpdf //productos.ods
    ?>
    <h1>Bienvidos usuarios registrados Pagina2</h1>
    <?php echo $_SESSION['usuario'];?>
    <p><a href="cierre.php">Cerrar sesion</a></p>
    <p>Esta informacion es solo para usuarios registrados</p>
    <a href="registrados1.php">Regresar</a>
</body>

</html>
<!-- jhl -->
