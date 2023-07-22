<?php

include 'Conexao.php';
include 'model/Endereco.php';
include 'model/Restaurante.php';

$url = $_SERVER['REQUEST_URI'];

if ($url === '/restaurantes/quantidade') {
    echo Restaurante::quantidade();
}

// /restaurantes/add?nome=A&tipo=B
if (explode('?', $url)[0] === '/restaurantes/add') {
    $novo = new Restaurante();
    $novo->nome = $_GET['nome'];
    $novo->tipo = $_GET['tipo'];

    $novo->salvar();

    echo "Ok";
}

if ($url === '/restaurantes/listar') {
    echo json_encode(
        Restaurante::buscarTodos()
    );
}