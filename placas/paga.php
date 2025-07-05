<?php
// Validar si el parámetro numpla está definido
if (isset($_GET['numpla'])) {
    $numpla = strtoupper($_GET['numpla']);
    include("lib/conectar.phtml");
    $x = conectar();
    echo '<table border="1">';
    echo '<tr>';
    echo '<td>FOLIO</td>';
    echo '<td>PLACA</td>';
    echo '<td>REFERENCIA</td>';
    echo '<td>PAGAR</td>';
    echo '</tr>';
    $encontrado = "tu placa no se encuentra en la base de datos";
    // Optimizar la consulta para buscar solo la placa y no traer toda la tabla
    $sql = "SELECT * FROM infracciones WHERE placa='$numpla' AND pagado='N'";
    $resultado = mysqli_query($x, $sql);
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        while ($dato = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $dato['folio'] . "</td>";
            echo "<td>" . $dato['placa'] . "</td>";
            echo "<td>" . $dato['referencia'] . "</td>";
            echo "<td><a href='pagale.php?ix=" . $dato['folio'] . "'>Pagar</a></td>";
            echo "</tr>";
            $encontrado = "tu placa ha sido encontrada";
        }
    }
    mysqli_close($x);
    echo '</table>';
    echo '<p><br><br>' . $encontrado . '</p>';
    echo '<p><a href="busqueda.php">Buscar otra placa</a></p>';
    echo '<p><a href="index.php">Regresar al menu principal</a></p>';
} else {
    echo '<p>Error: No se proporcionó el número de placa.</p>';
    echo '<p><a href="busqueda.php">Buscar otra placa</a></p>';
    echo '<p><a href="index.php">Regresar al menu principal</a></p>';
}
?>