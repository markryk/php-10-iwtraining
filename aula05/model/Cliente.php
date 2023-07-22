<?php

declare(strict_types=1);

include 'Endereco.php';

class Cliente
{
    public string $nome;
    public Endereco $endereco;
    public array $telefones = [];
}


$chiquim = new Cliente();
$chiquim->nome = 'Chiquim';
$chiquim->telefones[] = '85 9 9999-1234';

//forma 1
$end = new Endereco();
$end->logradouro = 'Rua dos Tabajaras';
$end->bairro = 'Jurema';

$chiquim->endereco = $end;

//forma 2
$chiquim->endereco = new Endereco();
$chiquim->endereco->logradouro = 'Ruas dos Tabajaras';
$chiquim->endereco->cidade = 'Caucauia';

echo $chiquim->telefones[0];