<?php
$ix=_GET['ix'];
include("lib/conecar.phtml");
$x=conectar();
$sql="update infracciones set pagado='S' where folio=$ix";
mysqli_query($x,$sql);
mysqli_close($x);

?>

<h1>Registro Guardado con exito></h1>
<p><a href="agregar.php">Agregar Otro</a></p>
<p><a href="index.php">Regresar al Inicio</a></p>