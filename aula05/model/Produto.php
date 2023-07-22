<?php

declare(strict_types=1);

class Produto 
{
    public string $nome;
    public string $descricao;
    public float $preco;
}

$p1 = new Produto();
$p1->nome = 'Pizza';
$p1->descricao = 'Muzzarela';
$p1->preco = 32.90;

$p2 = new Produto();
$p2->nome = 'Ypioca';
$p2->descricao = 'Prata';
$p2->preco = 10.87;
