<?php

//fuso horario
date_default_timezone_set('America/Sao_Paulo');

//dados de conexao no db local
$servidor = 'localhost';
$banco = 'conexao';
$usuario = 'root';
$senha = '';

try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8","$usuario","$senha");
} catch (Exception $e) {
    echo "erro ao conectar com o banco de dados";
    echo $e->getMessage();
}