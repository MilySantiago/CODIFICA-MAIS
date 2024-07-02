<?php
echo "Encontrar o menor valor em um array".PHP_EOL;

    for ($i = 0; $i <10; $i++){
        echo " Insira o numero".($i + 1). ":";
        $listaNumerica[]=trim(fgets(STDIN));
        
    
    }     $menorValor = $listaNumerica[0];
    
      for ($i = 0; $i <10; $i++){
        if ($listaNumerica[$i] < $menorValor){
        $menorValor = $listaNumerica[$i];
        }
    }
    echo"Este é o menor numero da lista: $menorValor";
    
    
?>