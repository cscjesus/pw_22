<?php
//funciones
function saludo()
{
    echo 'Hola mundo';
}
function suma($a, $b)
{
    return $a + $b;
}
function producto($a, $b)
{
    return $a * $b;
}
//ejemplo2.php?num1=2&num2=6&op=s
$a = $_REQUEST['num1'];
$b = $_REQUEST['num2'];
$op = $_REQUEST['op'];
switch ($op) {
    case 's':
        echo 'La suma es: ' . suma($a, $b);
        break;
    case 'p':
        echo 'El producto es: ' . producto($a, $b);
        break;
    default:
        echo 'Operacion no valida';
}
// saludo();
// <!-- jhl -->
