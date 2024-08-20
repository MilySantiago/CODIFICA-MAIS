<?php

require 'ContaBancaria.php';

$novaConta = new ContaBancaria(26, 'Kamily', 200);
$novaConta->exibirSaldo();
$novaConta->depositar(100);
$novaConta->exibirSaldo();
$novaConta->sacar(20);
$novaConta->exibirSaldo();