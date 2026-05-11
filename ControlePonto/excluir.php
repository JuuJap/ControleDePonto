<?php

include("db.php");

$id = $_POST['id'];

$sql = "DELETE FROM registros WHERE id = $id";

if($conexao->query($sql)){
    echo "sucesso";
}else{
    echo "erro";
}

?>