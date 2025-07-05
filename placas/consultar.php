<!DOCTYPE html>
<html>
<head>
    <title>Consultar infracciones</title>
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .marco {
            background: #fff;
            border: 2px solid #007bff;
            border-radius: 10px;
            width: 900px;
            margin: 60px auto;
            padding: 30px 30px 20px 30px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.07);
        }
        .marco h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 24px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 18px;
        }
        th, td {
            border: 1.5px solid #007bff;
            padding: 12px 18px;
            text-align: center;
        }
        th {
            background: #007bff;
            color: #fff;
        }
        tr:nth-child(even) { background: #f9f9f9; }
        .botones {
            text-align: center;
            margin-top: 18px;
        }
        .botones a {
            display: inline-block;
            background: #fff;
            color: #007bff;
            border: 2px solid #007bff;
            border-radius: 6px;
            font-size: 1em;
            font-weight: bold;
            padding: 10px 24px;
            margin: 0 10px;
            text-decoration: none;
            transition: background 0.2s, color 0.2s;
        }
        .botones a:hover {
            background: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="marco">
    <h2>Consultar infracciones</h2>
    <table>
        <tr>
            <th>FECHA</th>
            <th>FOLIO</th>
            <th>CONTRIBUYENTE</th>
            <th>DOCUMENTO</th>
            <th>REFERENCIA</th>
            <th>PLACA</th>
        </tr>
        <?php
        include("lib/conectar.phtml");
        $x = conectar();
        $sql = "SELECT * FROM infracciones LIMIT 0,30";
        $resultado = mysqli_query($x, $sql);
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            while ($dato = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>" . $dato['fecha'] . "</td>";
                echo "<td>" . $dato['folio'] . "</td>";
                echo "<td>" . $dato['contribuyente'] . "</td>";
                echo "<td>" . $dato['documento'] . "</td>";
                echo "<td>" . $dato['referencia'] . "</td>";
                echo "<td>" . $dato['placa'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo '<tr><td colspan="6">No hay registros para mostrar.</td></tr>';
        }
        mysqli_close($x);
        ?>
    </table>
    <div class="botones">
        <a href="index.php">Regresar</a>
    </div>
</div>
</body>
</html>