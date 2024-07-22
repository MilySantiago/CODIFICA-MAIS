CREATE DATABASE IF NOT EXISTS gestao_produtos;
USE gestao_produtos;

CREATE TABLE IF NOT EXISTS categorias (
    id INT AUTO_INCREMENT primary key,
    nome_categoria VARCHAR(200) NOT NULL,
    delete_at TIMESTAMP DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS unidades_medidas(
    id INT AUTO_INCREMENT primary key,
    nome_unidade_medida VARCHAR(150) NOT NULL,
    delete_at TIMESTAMP DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS fabricantes(
    id INT AUTO_INCREMENT primary key,
    nome_fabricante VARCHAR(130) NOT NULL,
    delete_at TIMESTAMP DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS fornecedores (
    id INT AUTO_INCREMENT primary key,
    nome_fornecedor VARCHAR(130) NOT NULL,
    delete_at TIMESTAMP DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);



CREATE TABLE IF NOT EXISTS produtos (
 id INT AUTO_INCREMENT primary key,
 nome VARCHAR(100) NOT NULL,
 sku VARCHAR (100) NOT NULL UNIQUE,
 descricao TEXT ,
 categoria_id INT NOT NULL,
 preco DECIMAL (10,2),
 unidade_medida_id INT NOT NULL,
 peso DECIMAL (10,2),
 quantidade_de_estoque BIGINT NOT NULL,
 fabricante_id INT NOT NULL,
 fornecedor_id INT NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 delete_at  TIMESTAMP DEFAULT NULL,
 FOREIGN KEY (categoria_id) REFERENCES categorias(id),
 FOREIGN KEY  (unidade_medida_id)  REFERENCES unidades_medidas (id),
 FOREIGN KEY (fabricante_id) REFERENCES fabricantes(id),
 FOREIGN KEY (fornecedor_id) REFERENCES fornecedores(id)
 );
SELECT*FROM  fabricantes;
SELECT*FROM  categorias;
SELECT*FROM  unidades_medidas;
SELECT*FROM  fornecedores WHERE nome_fornecedor = 'Maxxi Alimentos';
