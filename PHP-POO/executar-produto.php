
<?php

require "Produto.php";

$produto = new Produto('arroz', 3.00, 30);
$produto->exibirDetalhes();
$produto->alterarpreco(5.00);
$produto->exibirDetalhes();
$produto->ajustarEstoque(20);
$produto->exibirDetalhes();