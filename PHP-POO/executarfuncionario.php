<?php

require "Funcionario.php";

$funcionario = new Funcionario("Kamily","secretária", "1.300");
$funcionario->exibirDetalhes();
$funcionario->ajustarSalario(1.300);
$funcionario->exibirDetalhes();
$funcionario->alterarCargo("gerente");
$funcionario->exibirDetalhes();