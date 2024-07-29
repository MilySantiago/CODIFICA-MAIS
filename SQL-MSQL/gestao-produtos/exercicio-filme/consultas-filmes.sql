USE codifica;

-- 1 --

SELECT * titulo_original, nota
FROM filmes,
ORDER BY nota DESC;

-- 2--

SELECT titulo,duracao
FROM filmes
ORDER BY duracao DESC
LIMIT 1;

-- 3--
SELECT titulo, classificacao, duracao
FROM filmes
WHERE classificacao <= 16
ORDER BY duracao ASC
LIMIT 3;

-- 4--

SELECT titulo, ano_de_lancamento, nota
FROM filmes
ORDER BY ano_de_lancamento, nota DESC;

-- 5 --

SELECT titulo, categoria
FROM filmes
WHERE categoria LIKE '%Drama%';

-- 6--

SELECT count(*) as "TOTAL DE REGISTROS"
FROM filmes;

-- 7--
SELECT count(*) as "TOTAL DE REGISTROS", classificacao
FROM filmes
GROUP BY classificacao;

