<?php
echo "Hola mundo ";
echo 'PHP!';
//comentario de una linea

# comentario de una linea

/*
comentario
de
varias 
lineas
*/
$miVariable = "variable";//tipo string
$mi_contador = 10;//tipo entero
//arreglo indexado
$miArreglo = array('uno','dos','tres');
echo "<br/>" . $miArreglo[0];
echo "<br/>  $miArreglo[0]";
echo '<br/>  $miArreglo[0]';
//???
$miArreglo2 = array("uno"=>'val1','dos'=>'val2','tres'=>'val3');
echo "<br/>" . $miArreglo2['uno'];

print_r($miArreglo);  echo'<br/>';
print_r($miArreglo2);
echo json_encode($miArreglo2);
echo '<br/>';
$objeto = array('nombre'=>'Juan','materia'=>'Quimica');
echo json_encode($objeto);
$objeto2 = array('nombre'=>'Juan','materias'=>
    array('mat1'=>'Matematicas','mat2'=>'Fisica','mat3'=>'Quimica'));
echo'<br/>';
echo json_encode($objeto2);

echo'<br/>';
$cadena = 'cadena de caracteres';
echo substr($cadena,3,2);

//ejemplo1.php?a=3&b=4
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
echo "El valor de a es: $a, 
el valor de b es:$b";
$op = $a>$b?"la suma es:".($a+$b):
"La resta es:". ($a-$b);
echo "El resultado es: $op";
// if($a>$b)
//     $op=$a+$b;
// else
//     $op=$a-$b;
//investigar require, require_once, include, include_once
//https://blog.ahierro.es/archivos-y-permisos-de-usuario-en-apache-y-linux/
// <!-- jhl -->
