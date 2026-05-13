<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = getenv("MYSQLHOST");
$usuario = getenv("MYSQLUSER");
$senha = getenv("MYSQLPASSWORD");
$banco = getenv("MYSQLDATABASE");
$porta = getenv("MYSQLPORT");

$conexao = new mysqli(
    $host,
    $usuario,
    $senha,
    $banco,
    $porta
);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$conexao->set_charset("utf8");

//TODO O CONTEUDO CRIADO AQUI FOI DESENVOLVIDO PELOS ESTUDANTES JULIO APARECIDO, MATHEUS BASSI E JULIO CESAR,//
//USO INDEVIDO SERA CONSIDERADA COMO PLAGIO, E VAMOS ENCARAR COMO PURA BABAQUICE DA SUA PARTE//

?>
