<!DOCTYPE html>
<html>
<head>
    <title>Busqueda de placas</title>
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .marco {
            background: #fff;
            border: 2px solid #007bff;
            border-radius: 10px;
            width: 400px;
            margin: 60px auto;
            padding: 30px 30px 20px 30px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.07);
        }
        .marco h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 24px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            color: #333;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1.5px solid #007bff;
            border-radius: 5px;
            font-size: 1em;
            background: #f9f9f9;
        }
        input[type="submit"] {
            width: 100%;
            background: #fff;
            color: #007bff;
            border: 2px solid #007bff;
            border-radius: 6px;
            font-size: 1.1em;
            font-weight: bold;
            padding: 12px 0;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        input[type="submit"]:hover {
            background: #007bff;
            color: #fff;
        }
        .cancelar {
            display: block;
            text-align: center;
            margin-top: 18px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .cancelar:hover {
            text-decoration: underline;
        }
        .resultado {
            margin-top: 30px;
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
        .mensaje {
            text-align: center;
            margin: 18px 0 10px 0;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <div class="marco">
        <h2>Buscar placa</h2>
        <form name="form1" method="GET" action="busqueda.php">
            <label for="numpla">Numero de placa a buscar</label>
            <input name="numpla" type="text" id="numpla" maxlength="7" required />
            <input type="submit" name="enviar" id="enviar" value="Enviar" />
        </form>
        <a class="cancelar" href="index.php">Cancelar</a>

        <div class="resultado">
        <?php
        if (isset($_GET['numpla'])) {
            $numpla = strtoupper($_GET['numpla']);
            include("lib/conectar.phtml");
            $x = conectar();
            echo '<table>';
            echo '<tr>';
            echo '<th>Num Folio</th>';
            echo '<th>PLACA</th>';
            echo '<th>Referencia</th>';
            echo '</tr>';
            $encontrado = "Tu placa no se ha encontrado en la base de datos";
            $sql = "SELECT * FROM infracciones WHERE placa='$numpla' AND pagado='N'";
            $resultado = mysqli_query($x, $sql);
            if ($resultado && mysqli_num_rows($resultado) > 0) {
                while ($dato = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $dato['folio'] . "</td>";
                    echo "<td>" . $dato['placa'] . "</td>";
                    echo "<td>" . $dato['referencia'] . "</td>";
                    echo "</tr>";
                    $encontrado = "Tu placa ha sido encontrada";
                }
            }
            echo '</table>';
            echo '<div class="mensaje">' . $encontrado . '</div>';
            mysqli_close($x);
        }
        ?>
        </div>
    </div>
</body>
</html>