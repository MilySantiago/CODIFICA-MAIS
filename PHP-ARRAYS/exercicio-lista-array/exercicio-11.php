<?php

echo"Duplicação de Elementos".PHP_EOL;

for ($i = 0; $i <= 5; $i++) {
echo "Insira $i para o array:" . PHP_EOL;
  $listaNumerica[]=trim(fgets(STDIN));
  
} echo "Lista Original:".PHP_EOL;
for ($i = 0; $i <= 5; $i++) {
 echo $listaNumerica[$i] .PHP_EOL;
    
}


echo "Lista Dobrada:".PHP_EOL;
for ($i= 0; $i <= 5; $i++) {
  echo $listaDobrada[$i] = $listaNumerica[$i] * 2 .PHP_EOL;
}
