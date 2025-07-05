<!DOCTYPE html>
<html>
<head>
    <title>Agregar placas</title>
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
        input[type="text"], input[type="date"], select {
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
    </style>
</head>
<body>
    <div class="marco">
        <h2>Agregar placa</h2>
        <form id="form1" name="form1" method="GET" action="guardar.php">
            <label for="fecha">Fecha:</label>
            <input name="fecha" type="date" id="fecha" maxlength="10">

            <label for="folio">Folio:</label>
            <input name="folio" type="text" id="folio" maxlength="8" required>

            <label for="contribuyente">Contribuyente</label>
            <input name="contribuyente" type="text" id="contribuyente" maxlength="30" required>

            <label for="documento">Documento:</label>
            <select name="documento" id="documento">
                <option>Placa Moto</option>
                <option>Placa Vehiculo</option>
                <option>Tarjeta de circulacion</option>
                <option>Licencia de conducir</option>
            </select>

            <label for="referencia">Referencia</label>
            <input name="referencia" type="text" id="referencia" maxlength="150">

            <label for="placa">Placa</label>
            <input name="placa" type="text" id="placa" maxlength="8">

            <input type="submit" name="enviar" id="enviar" value="Enviar">
        </form>
        <a class="cancelar" href="index.php">Cancelar</a>
    </div>
</body>
</html>
