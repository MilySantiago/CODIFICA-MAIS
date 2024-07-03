
CREATE DATABASE gestao-produtos;


USE gestao-produtos;
CREATE TABLE produtos{
 id INT AUTO_INCREMENT primary key,
 nome VARCHAR(100) NOT NULL,
 sku VARCHAR (100) NOT NULL UNIQUE,
 descricao TEXT 
 categoria VARCHAR (100) NOT NULL,
 preco DECIMAL (10,2),
 unidade_medida VARCHAR(50) NOT NULL,
 peso DECIMAL (10,2),
 quantidade_de_estoque BIGINT NOT NULL,
 fabricante VARCHAR (100) NOT NULL,
 fornecedor VARCHAR (100) NOT NULL,
 delete_at  DATETIME ,
 created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
 updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
};

SELECT * FROM produtos;







       
