<!DOCTYPE html>
<html>
<head>
    <title>Menú principal</title>
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .marco {
            background: #fff;
            border: 2px solid #007bff;
            border-radius: 10px;
            width: 350px;
            margin: 60px auto;
            padding: 30px 20px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.07);
        }
        .boton-menu {
            display: block;
            width: 100%;
            margin: 18px 0;
            padding: 16px 0;
            background: #fff;
            color: #007bff;
            border: 2px solid #007bff;
            border-radius: 6px;
            font-size: 1.2em;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            transition: background 0.2s, color 0.2s;
        }
        .boton-menu:hover {
            background: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="marco">
        <a class="boton-menu" href="agregar.php">Agregar</a>
        <a class="boton-menu" href="busqueda.php">Buscar</a>
        <a class="boton-menu" href="pagar.php">Pagar</a>
        <a class="boton-menu" href="consultar.php">Consultar</a>
       
    </div>
</body>
</html>