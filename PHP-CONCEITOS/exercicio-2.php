//Calcular média de notas

<?php

echo"escreva a primeira nota:".PHP_EOL;
$notaum=fgets(STDIN) .PHP_EOL;

echo "escreva a segunda nota" .PHP_EOL;
$notadois=fgets(STDIN) .PHP_EOL;

echo "escreva a terceira nota" .PHP_EOL;
$notatres=fgets(STDIN) .PHP_EOL;


$mediadasnotas= ($notaum + $notadois + $notatres)/3;
echo "$mediadasnotas";






?>