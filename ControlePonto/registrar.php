<?php

include("db.php");

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];

$data = date("Y-m-d");
$hora = date("H:i:s");

$sql = "INSERT INTO registros(nome, tipo, data_registro, hora_registro)
VALUES('$nome', '$tipo', '$data', '$hora')";

if($conexao->query($sql)){
    echo "sucesso";
}else{
    echo "erro";
}

$tipo = strtolower($_POST['tipo']);

?>

