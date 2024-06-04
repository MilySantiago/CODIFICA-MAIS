<?php
echo "Digite um número: ";
$a =fgets(STDIN);

echo "Digite um segundo número: ";
$b = fgets(STDIN);

while ($a > $b) {
    echo "O $a deve ser menor ou igual $b".PHP_EOL;
    echo "Digite o primeiro número novamente: ".PHP_EOL;
    $a = fgets(STDIN);
    echo "Digite o segundo número novamente: ";
    $b = fgets(STDIN);
}

$somaDosnumeros = 0;

for ($i = $a; $i <= $b; $i++) {
    if ($i % 2 !== 0) {
        $somaDosnumeros += $i;
    }
}

echo "A soma dos numeros impares em intervalos: $somaDosnumeros";