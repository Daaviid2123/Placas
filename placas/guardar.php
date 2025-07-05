<?php
$fecha=$_GET['fecha'];
$folio=$_GET['folio'];
$contribuyente=$_GET['contribuyente'];
$documento=$_GET['documento'];
$referencia=$_GET['referencia'];
$placa=$_GET['placa'];
$placa=strtoupper($placa);
include("lib/conectar.phtml");
$x=conectar();
$sql="insert into infracciones (fecha,folio,contribuyente,documento,referencia,placa,pagado) values('$fecha','$folio','$contribuyente','$documento','$referencia','$placa','N')";
mysqli_query($x,$sql);

mysqli_close($x);


?>

<h1> Registro guardado con exito </h1>
<p><a href="agregar.php">Agregar Otro</a></p>
<p><a href="index.php"> Regresar al Inicio</a></p>