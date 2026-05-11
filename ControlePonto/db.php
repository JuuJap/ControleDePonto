<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "controle_ponto";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if($conexao->connect_error){
    die("Erro: " . $conexao->connect_error);
}

?>