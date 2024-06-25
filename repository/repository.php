<?php

include '../config/config.php';


$createDB = 'CREATE DATABASE IF NOT EXISTS cadastro';
$createTable = 'CREATE TABLE IF NOT EXISTS corretores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cpf VARCHAR(11) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    creci VARCHAR(20)
);';

$connect->query($createDB);
$connect->query($createTable);


function getCorretores(mysqli $connect)
{
    $getCorretores = "SELECT * FROM corretores";
    return $connect->query($getCorretores);
}

function deleteCorretor(int $id, mysqli $connect)
{
    $deleteCorretor = "DELETE FROM corretores WHERE id= $id";
    $connect->query($deleteCorretor);
    header('Location:/prova/public/index.php');
    exit;
}

function insertCorretor(string $nome, string $cpf, string $creci, mysqli $connect)
{
    $createCorretor = "INSERT INTO corretores (cpf, nome, creci) VALUES ('$cpf', '$nome', '$creci')";
    $connect->query($createCorretor);
    header('Location:/prova/public/index.php');
    exit;
}


function updatecorretor(string $nome, string $cpf, string $creci, mysqli $connect)
{
    $updateCorretor = "UPDATE corretores SET cpf='$cpf', nome='$nome', creci='$creci'";
    $connect->query($updateCorretor);
    header('Location:/prova/public/index.php');
    exit;
}