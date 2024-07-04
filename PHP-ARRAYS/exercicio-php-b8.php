<?php


echo "CHURRASCO COM AMIGOS". PHP_EOL;

$participantes = readline('Quantas pessoas participaram? ');
 $itensComprados = ['Carne', 'Cerveja', 'Refrigerante', 'Pão de alho'];
 $valorDosItens = [350, 200, 154, 60];
 
 function calcularPorpessoa($participantes, $valorDosItens) {
     $valorTotal = array_sum($valorDosItens);
     $valorPraPagar = $valorTotal / $participantes;
     return $valorPraPagar;
 }
  if ($participantes <= 1) {
    echo "Esta festa virou um enterro, ninguém veio". PHP_EOL;
    exit;
}
 
    $valorAPagar = calcularPorpessoa ($participantes, $valorDosItens);
     echo "Todos irao pagar $valorAPagar" . PHP_EOL;
     $valorMaximo = max($valorDosItens);
     $indiceMaisCaro = array_search($valorMaximo, $valorDosItens);
     $itemMaiorValor = $itensComprados[$indiceMaisCaro];
     
     echo "Este é o item mais caro é $itemMaiorValor" . PHP_EOL;
