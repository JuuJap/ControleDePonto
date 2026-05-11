/*
TODO O CONTEUDO CRIADO AQUI FOI DESENVOLVIDO PELOS ESTUDANTES JULIO APARECIDO, MATHEUS BASSI E JULIO CESAR, 
SO INDEVIDO SERA CONSIDERADA COMO PLAGIO, E VAMOS ENCARAR COMO PURA BABAQUICE DA SUA PARTE
  */

function trocarTema() {
    document.body.classList.toggle("dark");

    const botao = document.querySelector(".tema-btn");

    if(document.body.classList.contains("dark")) {
        botao.innerHTML = "☀️";
    } else {
        botao.innerHTML = "🌙";
    }
}

async function registrar(tipo){

    const nome = document.getElementById("nome").value;

    if(nome.trim() == ""){
        alert("Digite um nome");
        return;
    }

    const form = new FormData();
    form.append("nome", nome);
    form.append("tipo", tipo);

    try {

        const resposta = await fetch("registrar.php", {
            method: "POST",
            body: form
        });

        const resultado = await resposta.text();

        console.log(resultado);

        document.getElementById("nome").value = "";

        carregar();

    } catch(erro){
        console.log(erro);
        alert("Erro ao registrar");
    }
}

async function carregar(){

    try {

        const data = document.getElementById("filtroData").value;

        let url = "listar.php";

        if(data != ""){
            url += "?data=" + data;
        }

        const resposta = await fetch(url);

        const texto = await resposta.text();

        console.log(texto);

        const dados = JSON.parse(texto);

        const tabela = document.getElementById("tabela");

        tabela.innerHTML = "";

        if(dados.length == 0){

            tabela.innerHTML = `
                <tr>
                    <td colspan="6">
                        Nenhum registro encontrado
                    </td>
                </tr>
            `;

            return;
        }

        dados.forEach(item => {

            tabela.innerHTML += `
                <tr>
                    <td>${item.nome}</td>
                    <td>${item.tipo}</td>
                    <td>${item.data_registro}</td>
                    <td>${item.hora_registro}</td>
                    <td>${item.horas}</td>
                    <td>
                        <button onclick="excluir(${item.id})">
                            Excluir
                        </button>
                    </td>
                </tr>
            `;

        });

    } catch(erro){

        console.log(erro);

        alert("Erro ao carregar registros");

    }

}

function filtrar(){
    carregar();
}

async function excluir(id){

    if(!confirm("Deseja excluir?")){
        return;
    }

    const form = new FormData();
    form.append("id", id);

    try {

        await fetch("excluir.php", {
            method: "POST",
            body: form
        });

        carregar();

    } catch(erro){

        console.log(erro);

        alert("Erro ao excluir");

    }

}

window.onload = carregar;