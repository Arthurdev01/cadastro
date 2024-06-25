<?php
include '../repository/repository.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST["_method"] != "put"){
    $nome = $_REQUEST['nome'];
    $cpf = $_REQUEST['cpf'];
    $creci = $_REQUEST['creci'];

    insertCorretor($nome, $cpf, $creci, $connect);
}

if (isset($_REQUEST["_method"]) && $_REQUEST["_method"] == "put") {
    $nome = $_REQUEST['nome'];
    $cpf = $_REQUEST['cpf'];
    $creci = $_REQUEST['creci'];

    updateCorretor($nome, $cpf, $creci, $connect);
}


if (isset($_GET["id"])) {
    deleteCorretor($_GET["id"], $connect);
}

function showCorretores(mysqli $connect)
{
    return getCorretores($connect);
}

