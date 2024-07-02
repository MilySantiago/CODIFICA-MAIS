<?php
echo 'SISTEMA DE CONTROLE DE NOTAS'. PHP_EOL;

$notasAlunos = [
[8.5, 6.0, 7.8, 9.2, 5.5], 
[7.0, 8.0, 6.5, 7.5, 8.5], 
[6.5, 7.5, 4.5, 5.5, 7.0], 
[5.0, 4.6, 7.8, 9.0, 6.0] 
 ];
 
 function calcularMedia($notas) {
    $somaDasNotas = array_sum($notas);
    $quantidadeDeNotas = count($notas);
    return $somaDasNotas / $quantidadeDeNotas;
 }
 
 $aprovados = 0;
 $reprovados = 0;
 
 foreach($notasAlunos as $i => $notas) {
     $mediaDasnotas = calcularMedia($notas);
     echo "Este aluno: " . $i+1 . " possui a média: $mediaDasnotas" . PHP_EOL;
     if ($mediaDasnotas < 7 ) {
         $reprovados++;
          echo "Aluno " . ($i + 1) . " foi reprovado $mediaDasnotas". PHP_EOL ;
     } else {
         $aprovados++;
          echo "Aluno " . ($i + 1) . " foi aprovado $mediaDasnotas". PHP_EOL ;
     }
 }
 
 echo "Esses alunos reprovados são: $reprovados" . PHP_EOL;
 echo "Esses alunos aprovados são: $aprovados";



 