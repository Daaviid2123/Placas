<!DOCTYPE html>
<html>
<head>
    <title>Pagar infracción</title>
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
    </style>
</head>
<body>
    <div class="marco">
        <h2>Pagar infracción</h2>
        <form id="form1" name="form1" method="GET" action="pagar.php">
            <label for="numpla">Numero de placa</label>
            <input name="numpla" type="text" id="numpla" maxlength="7" required />
            <input type="submit" name="enviar" id="enviar" value="Enviar" />
        </form>
        <a class="cancelar" href="index.php">Cancelar</a>
    </div>
</body>
</html>