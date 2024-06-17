<?php
echo "CÁLCULO DE DESCONTO PROGRESSIVO". PHP_EOL;

$valorCompra = readline("Digite o valor da compra: R$ ");

function aplicarDesconto($valorCompra, $percentualDesconto)
{	
return $valorCompra - ($valorCompra * $percentualDesconto/ 100);
}

function calcularDesconto($valorCompra)
{
    if ($valorCompra < 100) {
        return null;
    } elseif ($valorCompra >= 100 && $valorCompra < 500) {
        return aplicarDesconto($valorCompra, 10);
    } else {
        return aplicarDesconto($valorCompra, 20);
    }
}


$valorTotal = calcularDesconto($valorCompra);

echo "O preço total da compra dos produtos foi de : R$ $valorCompra" . PHP_EOL;
if ($valorTotal==null){
    echo "Esta compra não teve desconto";
}else{
      echo "Valor total da compra usando o desconto: R$ " . $valorTotal . PHP_EOL;
}





?>