<h1>Como Usar</h1>
<p>pra funcionar precisa deixar a pasta do projeto (ControlePonto) dentro da pasta "htdocs" do Xampp e abrir usando o seguinte url "http://localhost/ControlePonto/"</p>

<h2>Em seguida</h2>

Pra fazer funcionar, tem que recriar o banco de dados no xampp/localhost, basta colar todo código a seguir no Terminal do Localhost.
<pre><code><b>

-- Cria o banco
CREATE DATABASE IF NOT EXISTS controle_ponto;

-- Usa o banco
USE controle_ponto;

-- Cria a tabela de usuários
CREATE TABLE IF NOT EXISTS registros (

    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    tipo ENUM('entrada', 'saida') NOT NULL,
    data_registro DATE NOT NULL,
    hora_registro TIME NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

-- REGISTROS DE TESTE
INSERT INTO registros
(nome, tipo, data_registro, hora_registro)

VALUES

('Teste', 'entrada', '2026-05-11', '08:03:00'),
('Teste', 'saida', '2026-05-11', '17:11:00');

</b></code></pre>

<style>
    pre {
    background: #1e1e1e;
    color: #ffffff;

    padding: 15px;

    border-radius: 10px;

    overflow-x: auto;

    text-align: left;

    font-size: 14px;
}

code {
    font-family: Consolas, monospace;
}
</style>