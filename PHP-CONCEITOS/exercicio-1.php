//Somar dois números

<?php
echo"escreva um numero:".PHP_EOL;
$numeroum=fgets(STDIN) .PHP_EOL;

echo "escreva um segundo numero" .PHP_EOL;
$numerodois=fgets(STDIN) .PHP_EOL;

$soma= $numeroum + $numerodois;
echo "a soma dos dois numeros e: $soma";