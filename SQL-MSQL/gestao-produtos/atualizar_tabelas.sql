CREATE DATABASE IF NOT EXISTS gestao_produtos;
USE gestao_produtos;

ALTER TABLE produtos 
MODIFY COLUMN categoria INT NOT NULL;

ALTER TABLE produtos 
MODIFY COLUMN unidade_medida INT NOT NULL;

ALTER TABLE produtos 
MODIFY COLUMN fabricante INT NOT NULL;

