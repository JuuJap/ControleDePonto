<?php

date_default_timezone_set("America/Sao_Paulo");

include("db.php");

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];

$dataAtual = new DateTime(
    "now",
    new DateTimeZone("America/Sao_Paulo")
);

$data_registro = $dataAtual->format("Y-m-d");
$hora_registro = $dataAtual->format("H:i:s");

$sql = "INSERT INTO registros
(nome, tipo, data_registro, hora_registro)
VALUES
('$nome', '$tipo', '$data_registro', '$hora_registro')";

if($conexao->query($sql)){
    echo "sucesso";
}else{
    echo "erro";
}

/*
TODO O CONTEUDO CRIADO AQUI FOI DESENVOLVIDO PELOS ESTUDANTES JULIO APARECIDO, MATHEUS BASSI E JULIO CESAR, 
USO INDEVIDO SERA CONSIDERADA COMO PLAGIO, E VAMOS ENCARAR COMO PURA BABAQUICE DA SUA PARTE
*/

?>
