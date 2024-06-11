<?php

echo"CÁLCULO DE ÁREA E PERÍMETRO DE UM RETÂNGULO".PHP_EOL;
echo"Insira a do altura retângulo:".PHP_EOL;
$altura=trim(fgets(STDIN));
echo"Insira a largura do retângulo:".PHP_EOL;
$largura=trim(fgets(STDIN));

$area= $largura*$altura;
$perimetro=2 * ($largura + $altura);

echo"Esta é a área do rentâgulo: $area ".PHP_EOL;
echo"Esta é o perímetro do rentâgulo: $perimetro ";