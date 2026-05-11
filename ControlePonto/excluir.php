<?php

include("db.php");

$id = $_POST['id'];

$sql = "DELETE FROM registros WHERE id = $id";

if($conexao->query($sql)){
    echo "sucesso";
}else{
    echo "erro";
}
/*
TODO O CONTEUDO CRIADO AQUI FOI DESENVOLVIDO PELOS ESTUDANTES JULIO APARECIDO, MATHEUS BASSI E JULIO CESAR, 
SO INDEVIDO SERA CONSIDERADA COMO PLAGIO, E VAMOS ENCARAR COMO PURA BABAQUICE DA SUA PARTE
  */
?>