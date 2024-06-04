//Tabela de Multiplicação
<?php
echo "Digite um numero";
$numero=fgets(STDIN).PHP_EOL;
for($multiplos=1; $multiplos<11; $multiplos++){ 
    $multiplicacao=($numero*$multiplos).PHP_EOL;
echo $multiplicacao;
}