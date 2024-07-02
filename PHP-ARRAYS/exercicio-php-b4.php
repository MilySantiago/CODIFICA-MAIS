<?php

echo "Insira a temperatura: ";
$temperatura = readline();

echo "Insira a temperatura (C ou F): ";
$unidade = readline();


if ($unidade== "c")
{
    $fahrenheit = ($temperatura * 9/5) + 32;
    echo"Aqui está convertido de celsius para fahrenheit: $fahrenheit". "º";
}
else if ($unidade== "f")
{
    $unidade== "f";
    $fahrenheit= ($temperatura - 32) * 5/9;
    echo"Aqui está convertido de fahrenheit para celsius : $celsius" . "º";
}
else {
    echo "Desculpe, não entendi qual tipo de temperatura você quer!"
}  