<?php
 echo "Soma dos elementos pares:".PHP_EOL;
$somaDospares=0;


for ($i = 1; $i <5; $i++){
 echo " Insira o numero $i:";
        $listaNumerica[$i]=trim(fgets(STDIN));
         
 
  if ($listaNumerica[$i] % 2 == 0){
  $somaDospares = $listaNumerica[$i] + $somaDospares;
     
  }
  
}
echo"Este são os números pares somados da lista: $somaDospares";
