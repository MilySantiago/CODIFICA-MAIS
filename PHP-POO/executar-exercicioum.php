<?php

require 'exercicioum-poo.php';

$fiat = new Carro ('Fiat', 'Fiat Uno', 2004, 'branco');
$chevrolet = new Carro ('chevrolet', 'minivan', 2004, 'preto');

echo $fiat->ligar();
echo $fiat->acelerar();
echo $fiat->frear();

echo $chevrolet->ligar();
echo $chevrolet->acelerar();
echo $chevrolet->frear();