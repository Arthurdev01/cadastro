<?php

$hostname = "localhost";
$username = "root";
$password = null;
$database = "cadastro";
$port = 3306;


$connect = new mysqli($hostname, $username, $password, $database, $port);
if ($connect->connect_error) {
    die("Falha na conexão: " . $connect->connect_error);
}
