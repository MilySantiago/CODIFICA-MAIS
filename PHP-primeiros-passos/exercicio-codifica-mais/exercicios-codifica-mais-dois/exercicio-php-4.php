<?php
do {
    echo "Digite um número inteiro (ou -1 para parar): ";
  $x =(int) fgets(STDIN);
 
    if ($x === -1) {
       break;
    } 
$NumeroMaior  = null;
    if ($x === null or $x > $NumeroMaior) {
        $Numeromaior = $x;
    }
$NumeroMenor = null;
    if ($NumeroMenor === null or  $x < $NumeroMenor) {
        $NumeroMenor = $x;
    }
} while (true);

if ($NumeroMaior !== null and $NumeroMenor !== null) {
    echo "O maior número: $NumeroMaior".PHP_EOL;
    echo "O menor número: $NumeroMenor".PHP_EOL;}