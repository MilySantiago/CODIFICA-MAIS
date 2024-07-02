//Verificar maioridade

<?php

echo"Digite sua idade:".PHP_EOL;
$idade=fgets(STDIN) .PHP_EOL;

if($idade >= 18){
    echo "Parabens, você já pode ir preso!";
}
else{
echo "Tu é menor de idade, vai comer feijão com arroz";
}