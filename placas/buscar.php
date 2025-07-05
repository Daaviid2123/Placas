<?php
$numpla=$_GET['numpla'];
$numpla = strtoupper($numpla);
include("lib/conectar.phtml");
$x=conectar();
?>

<table border="1">
<tr>
  <td> Num folio </td>
  <td> PLACA </td>
  <td> REFERENCIA </td>
</tr>

<?php
$encontrado="tu placa  no se ah encontrado en la base de datos ";
$sql="select * from infracciones";
$resultado=mysqli_query($x, $sql);
$filas=mysqli_num_rows($resultado);

for ($y=0;$y<$filas;$y++){
    $dato=mysqli_fetch_array($resultado);

    if ($dato['placa']==$numpla){
        if ($dato['pagado']=="N"){
            echo "<tr>";
            echo "<td>" . $dato['folio'] . "</td>";
            echo "<td>" . $dato['placa'] . "</td>";
            echo "<td>" . $dato['referencia'] . "</td>";
            echo "</tr>";
            $encontrado="Tu placa si se encontro ";


        }

    }

}

mysqli_close($x);

?>

</table>
<p><br><br>

<?php
echo $encontrado;
?>

</p>

<p><a href="busqueda.php">Buscar otro mas</a></p>
<p><a href="index.php">Regresar al inicio</a></p>


