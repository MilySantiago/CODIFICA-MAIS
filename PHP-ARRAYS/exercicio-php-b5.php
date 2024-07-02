<?php
echo "SISTEMA DE COMPRAS (CÁLCULO DE DESCONTO):".PHP_EOL;

echo" Insira o valor da conta:";
$valorOriginal=trim(fgets(STDIN));
echo" Insira a porcentagem de desconto:";
$porcentagem=trim(fgets(STDIN));


function calculodeDesconto ($valorOriginal, $porcentagem){
    $Desconto=($valorOriginal * $porcentagem) /100; 
    $valorTotal= $valorOriginal-$Desconto;
    return $valorTotal;
}


 $valorTotal=calculodeDesconto($valorOriginal, $porcentagem);
 echo "Valor final é: $valorTotal";