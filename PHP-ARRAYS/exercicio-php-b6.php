<?php
echo"CALCULADORA DE IMC (ÍNDICE DE MASSA CORPORAL)".PHP_EOL;
echo"Insira a sua altura:".PHP_EOL;
$altura=trim(fgets(STDIN));
echo"Insira seu peso:".PHP_EOL;
$peso=trim(fgets(STDIN));

 $imc = $peso / ($altura **2);
 
if ($imc <18.5) {
echo " Este é seu imc $imc, você está abaixo do peso";
}
elseif(($imc > 18.5) and ($imc <=24.9)) {
echo "Este é seu imc $imc, você está com o peso Normal";
}
elseif(($imc > 25) and ($imc <=29.9)) {
echo " Este é seu imc $imc, você está muito acima do peso";
}
elseif(($imc > 30) and ($imc <=34.9)) {
echo " Este é seu imc $imc, você está na Obesidade I";
}
elseif(($imc > 35) and ($imc <=39.9)) {
echo " Este é seu imc $imc, você está na Obesidade II (severa)";
}
else {
echo " Este é seu imc $imc, você está na Obesidade III (mórbida)";
}