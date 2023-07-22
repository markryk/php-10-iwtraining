<?php

declare(strict_types=1);

class Restaurante
{
    //atributos: O que um Restaurante tem
    public string $nome;
    public Endereco $endereco;
    public string $tipo;

    public const TABELA = 'tb_restaurantes';

    //metodos: O que um Restaurante faz
    public function salvar(): void
    {
        $query = "INSERT INTO " . self::TABELA . " (nome, tipo) 
                  VALUES ('{$this->nome}', '{$this->tipo}')";

        $con = Conexao::open();

        mysqli_query($con, $query);
    }

    public static function quantidade(): int
    {
        $query = 'SELECT COUNT(*) as qtd FROM ' . self::TABELA;

        $con = Conexao::open();

        //executando a query e pegando o resultado dela
        $resultado = mysqli_fetch_object(
            mysqli_query($con, $query)
        );

        return (int) $resultado->qtd;
    }

    public static function buscarTodos(): array
    {
        $query = 'SELECT * FROM ' . self::TABELA;

        $con = Conexao::open();

        $resultado = mysqli_query($con, $query);

        return mysqli_fetch_all($resultado);
    } 

    public function excluir(): void
    {
        echo "Excluindo..."; 
        //aqui a gente chamaria a conexao e faria um "DELETE FROM..."
    }
}

//instancia: um elemento criado apartir daquela "forma"

/*
$r1 = new Restaurante();
$r1->nome = 'Ordones'; //dados que vem do formulario/JSON
$r1->endereco = new Endereco();
$r1->endereco->logradouro = 'Rua Carolino de Aquino';
$r1->tipo = 'Regional';

$r1->salvar();

echo $r1->endereco->logradouro;*/