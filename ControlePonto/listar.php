<?php

/*
TODO O CONTEUDO CRIADO AQUI FOI DESENVOLVIDO PELOS ESTUDANTES JULIO APARECIDO, MATHEUS BASSI E JULIO CESAR, 
USO INDEVIDO SERA CONSIDERADA COMO PLAGIO, E VAMOS ENCARAR COMO PURA BABAQUICE DA SUA PARTE
  */

include("db.php");

header('Content-Type: application/json');



if(isset($_GET['data']) && $_GET['data'] != ""){

    $data = $_GET['data'];

    $sql = "SELECT * FROM registros
            WHERE data_registro = ?
            ORDER BY data_registro DESC, id ASC";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $data);

} else {

    $sql = "SELECT * FROM registros
            ORDER BY data_registro DESC, id ASC";

    $stmt = $conexao->prepare($sql);

}



$stmt->execute();

$resultado = $stmt->get_result();

$dados = [];



$entradas = [];



while($linha = $resultado->fetch_assoc()){


    $nome = trim(strtolower($linha["nome"]));


    $tipo = strtolower(trim($linha["tipo"]));


    $horasTrabalhadas = "--";



    if($tipo == "entrada"){

        $entradas[$nome] = $linha["hora_registro"];

    }



    if($tipo == "saida" && isset($entradas[$nome])){

        $entrada = strtotime($entradas[$nome]);
        $saida = strtotime($linha["hora_registro"]);

        $diferenca = $saida - $entrada;


        if($diferenca >= 0){

            $horas = floor($diferenca / 3600);

            $minutos = floor(($diferenca % 3600) / 60);

            $horasTrabalhadas =
                str_pad($horas, 2, "0", STR_PAD_LEFT)
                . ":" .
                str_pad($minutos, 2, "0", STR_PAD_LEFT);

        }

    }



    $dados[] = [

        "id" => $linha["id"],

        "nome" => ucwords($nome),

        "tipo" => ucfirst($tipo),

        "data_registro" => date(
            "d/m/Y",
            strtotime($linha["data_registro"])
        ),

        "hora_registro" => substr(
            $linha["hora_registro"],
            0,
            5
        ),

        "horas" => $horasTrabalhadas

    ];

}



echo json_encode($dados);

/*
TODO O CONTEUDO CRIADO AQUI FOI DESENVOLVIDO PELOS ESTUDANTES JULIO APARECIDO, MATHEUS BASSI E JULIO CESAR, 
USO INDEVIDO SERA CONSIDERADA COMO PLAGIO, E VAMOS ENCARAR COMO PURA BABAQUICE DA SUA PARTE
  */

?>