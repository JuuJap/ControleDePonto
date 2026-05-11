CREATE DATABASE controle_ponto;

USE controle_ponto;

CREATE TABLE registros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    tipo VARCHAR(20) NOT NULL,
    data_registro DATE NOT NULL,
    hora_registro TIME NOT NULL
);