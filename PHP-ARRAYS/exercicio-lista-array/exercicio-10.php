<?php
echo "Programa que lê um array de 5 elementos e imprime o array em ordem inversa".PHP_EOL;

for($i=0; $i <=4; $i ++){
    echo"Insira o $i da Lista Numérica:";
    $listaNumerica[]=trim(fgets(STDIN));
   }
  $listaInversa=null;
  echo "Array invertido:" . PHP_EOL;
for ($i = 4; $i >= 0; $i--) {
 $listaInversa=$listaNumerica[$i] ;
 echo $listaInversa;
}