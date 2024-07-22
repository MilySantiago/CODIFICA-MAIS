USE gestao_produtos;
INSERT INTO fabricantes (nome_fabricante)

VALUES
('JBS.'),
('RAÍZEN ENERGIA'),
('MARFRIG GLOBAL FOODS'),
('AMBEV'),
('MARFRIG GLOBAL FOODS'),
('CARGILL AGRÍCOLA'),
('ARCHER DANIELS MIDLAND'),
('BUNGE ALIMENTOS.'),
('COSAN.'),
('industrias guimaraes'),
('Cereais');


INSERT INTO categorias (nome_categoria)

VALUES
('Açougue'),
('Frios'),
('laticínios'),
('Adega'),
('bebidas'),
('Higiene'),
('Hortifruti'),
('mercearia'),
('Padaria'),
('Enlatados'),
('Cereais');


INSERT INTO fornecedores (nome_fornecedor)
VALUES
('Triunfo Alimentos'),
('Maxxi Alimentos'),
('Mix Alimentos'),
('Smart Alimentos'),
('Santos Alimentos'),
('Bahia Alimentos'),
('Brasil Alimentos'),
('fazenda agosto');


INSERT INTO unidades_medidas (nome_unidade_medida)

VALUES
('quilograma');



INSERT INTO produtos (nome, sku, descricao, categoria_id, preco, unidade_medida_id, peso, quantidade_de_estoque, fabricante_id, fornecedor_id)
VALUES
 
( 'Arroz', 'SKU001', 'branquinho e soltinho', '4', '50.00', '1', '5.00', '34', 3 , '4' ),
( 'feijao', 'SKU002', 'pretinho e suculento', '2', '20.00', '1', '2.00', '10', '6', '6' ),
( 'batata', 'SKU003', 'doce', ' 1', '25.00', '3', '1.00', '1', '6', '6' ),
( 'salada enlatada', 'SKU004', 'verde', '1', '18.00', '1', '0.34', '20', '5', '2' ),
( 'caldo verde', 'SKU005', 'temperado', '3', '12.00', '1', '1.00', '40', '4', '2' ),
( 'frango', 'SKU006', 'bem suculento', '2', '60.00', '1', '3.00', '60', '2', '4' ),
( 'carne', 'SKU007', 'vermelha', ' 1', '100.00', '1', '2.00', '50', '2', '5' ),
( 'ovo', 'SKU008', 'codorna', '5', '23.00', '2', '1.00', '1', '4', '6' ),
( 'leite', 'SKU009', 'de vaca', '5', '13.00', '1', '1.00', '1', '5', '6' ),
( 'amido de milho', 'SKU010', 'branquinho ', '4', '15.00', '1', '1.00', '23', '6', '3' );  

