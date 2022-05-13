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
    require('fpdf/fpdf.php');
    include('datos.php');
    //crear una subclase para poder modificar el header y footer
    class PDF extends FPDF
    {
        function Header()
        {
            //logo
            // $this->Image('fondo.png', 10, 10, 200, 100);
            $this->Image('tec.jpg', 10, 10, 200, 300);
            $this->SetFont('Arial', 'B', 12); // Arial Bold 12  
            $this->Cell(80);  //moverse a la derecha
            $this->Cell(30, 25, 'Listado de productos', 0, 0, 'C');
            //salto de linea
            $this->Ln(30);
            $altoCelda = 6;
            $this->Cell(20, $altoCelda, 'CODIGO', 1, 0, 'C', 0);
            $this->Cell(60, $altoCelda, 'NOMBRE', 1, 0, 'C', 0);
            $this->Cell(40, $altoCelda, 'SECCION', 1, 0, 'C', 0);
            $this->Cell(20, $altoCelda, 'IMPORT.', 1, 0, 'C', 0);
            $this->Cell(20, $altoCelda, 'PRECIO', 1, 0, 'C', 0);
            $this->Cell(30, $altoCelda, 'PAIS ORI.', 1, 1, 'C', 0);
        }
        function Footer()
        {
            //posicion: 1.5 cm del final
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'Pag. ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
    }
    //solucionar Fatal error:Uncaught: FPDF error
    ob_end_clean();
    $pdf = new PDF();
    $pdf->AliasNbPages();//para colocar numero tot. de paginas.
    $pdf->AddPage();

    $miconexion = mysqli_connect(HOST, USER, PASSWORD);
    if (mysqli_connect_errno()) {
        echo "Error al conectar con el servidor";
    }
    mysqli_select_db($miconexion, DB);
    mysqli_set_charset($miconexion, 'utf8');
    $query = 'select * from productos';
    $result = mysqli_query($miconexion, $query);
    $altoCelda = 6;
    while ($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        //ancho, alto,texto,borde,salto,alineacion
        $pdf->Cell(20, $altoCelda, $fila['codigoarticulo'], 1, 0, 'C', 0);
        $pdf->Cell(60, $altoCelda, $fila['nombrearticulo'], 1, 0, 'C', 0);
        $pdf->Cell(40, $altoCelda,
         utf8_decode( $fila['seccion'])
         , 1, 0, 'C', 0);
        $pdf->Cell(20, $altoCelda, $fila['importado'], 1, 0, 'C', 0);
        $pdf->Cell(20, $altoCelda, $fila['precio'], 1, 0, 'C', 0);
        $pdf->Cell(30, $altoCelda, $fila['paisdeorigen'], 1, 1, 'C', 0);
    }
    mysqli_close($miconexion);
    $pdf->Output();
    ?>
</body>

</html>