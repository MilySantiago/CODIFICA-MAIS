<?php

 function exibirMenu() {
    echo "Escolha uma das opções abaixo:".PHP_EOL;
    echo "1. Adicionar um produto: Insira o número 1".PHP_EOL;
    echo "2. Remover um produto : Insira o número 2".PHP_EOL;
    echo "3. Verificar Estoque : Insira o número 3".PHP_EOL;
    echo "4. Listar o Estoque: Insira o número 1 ".PHP_EOL;
    echo "5. Sair: Insira o número 5".PHP_EOL;
    $opcao = readline("Digite a sua escolha: ");
    return $opcao;
}