//Checando Primos
<?php
echo "Digite um número: " . PHP_EOL;
$numero = fgets(STDIN);

$Primo = true;

for ($contador = 2; $contador <= $numero - 1; $contador++) {
    if ($numero % $contador === 0) {
        $Primo = false;
        break;
    }
}

if ($numero <= 1 or !$Primo) {
    echo "O número não é primo.";
} else {
    echo "O número é primo.";
}