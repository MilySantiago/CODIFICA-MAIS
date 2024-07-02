<?php
echo "Encontrar Elemento e Índice" .PHP_EOL;
    $listaNumerica=array();
    $verificado = false;

    for ($i = 0; $i <= 6; $i++){
        $listaNumerica[$i] =readline(" Este é o número " . ($i + 1) . ": ");
}
       
    
    echo "Escreva um número:";
    $numero=trim(fgets(STDIN));

    for ($i = 0; $i < 7; $i++){
        if($listaNumerica[$i] == $numero){
            echo "Este $numero está na lista, e a posição é $i." . PHP_EOL;
            $verificado = true;
        }
    }
    if ($verificado != true){
        echo "Este número $numero não está na lista.";
    }