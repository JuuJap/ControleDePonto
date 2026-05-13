<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = $_ENV['MYSQLHOST'];
$usuario = $_ENV['MYSQLUSER'];
$senha = $_ENV['MYSQLPASSWORD'];
$banco = $_ENV['MYSQLDATABASE'];
$porta = $_ENV['MYSQLPORT'];

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
