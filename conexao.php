<?php

//Criar uma conexão com o banco de dados
try {
    //Variaveis de conexão
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'aula';

    //Criar a conexão
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco;", $usuario, $senha);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
    exit;
}
