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

/*
TODO O CONTEUDO CRIADO AQUI FOI DESENVOLVIDO PELOS ESTUDANTES JULIO APARECIDO, MATHEUS BASSI E JULIO CESAR, 
SO INDEVIDO SERA CONSIDERADA COMO PLAGIO, E VAMOS ENCARAR COMO PURA BABAQUICE DA SUA PARTE
  */

?>

