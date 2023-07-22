-- Para criar uma tabela --
CREATE TABLE tb_restaurantes (
    id INT(5) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    endereco VARCHAR(100)
);

ALTER TABLE table_name
RENAME COLUMN old_name to new_name; 

RENAME TABLE tb_restaurante TO tb_restaurantes;


CREATE TABLE tb_produtos (
    id INT(5) PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(100) NOT NULL,
    valor FLOAT(6,2)
);