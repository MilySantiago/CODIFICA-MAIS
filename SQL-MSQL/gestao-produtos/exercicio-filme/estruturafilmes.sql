CREATE DATABASE codifica;
USE codifica;
CREATE TABLE IF NOT EXISTS filmes(
id INT auto_increment primary key,
titulo VARCHAR(255) NOT NULL,
titulo_original VARCHAR(255) NOT NULL,
ano_de_lançamento INT NOT NULL,
classificacao INT NOT NULL,
duracao INT NOT NULL,
categoria TEXT,
nota DECIMAL (3,1) NOT NULL

);


