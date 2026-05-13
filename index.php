<?php
require_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Ponto</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            margin:0;
            padding:40px;
        }

        .container{
            max-width:700px;
            margin:auto;
            background:white;
            padding:30px;
            border-radius:10px;
        }

        h1{
            text-align:center;
        }

        .status{
            background:#d4edda;
            color:#155724;
            padding:15px;
            border-radius:5px;
            margin-bottom:20px;
        }

        .links{
            display:flex;
            flex-direction:column;
            gap:15px;
        }

        a{
            text-decoration:none;
            background:#007bff;
            color:white;
            padding:15px;
            border-radius:5px;
            text-align:center;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Controle de Ponto</h1>

    <div class="status">
        Sistema online funcionando.
    </div>

    <div class="links">
        <a href="registrar.php">Registrar Ponto</a>
        <a href="listar.php">Listar Registros</a>
    </div>

</div>

</body>
</html>
