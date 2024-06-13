<?php

echo "CÁLCULO DE GORJETA EM UM RESTAURANTE".PHP_EOL;

echo" Insira o valor total da conta:";
$valorConta=trim(fgets(STDIN));
 
 $valorGorjeta=$valorConta*10/ 100;
 $valorTotal=$valorConta+$valorGorjeta;
 
 echo"Este é o valor da gorjeta: $valorGorjeta".PHP_EOL;
 echo"Este é o valor total: $valorTotal".PHP_EOL;