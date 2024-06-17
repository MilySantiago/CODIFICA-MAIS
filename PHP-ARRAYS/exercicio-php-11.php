<?php
echo "SISTEMA DE UMA LOJA".PHP_EOL;
echo "Bem Vindo ao nosso sistema, fique a vontade:".PHP_EOL;
    
function exibirMenu()
{
    
    echo "Escolha uma das opções abaixo:".PHP_EOL;
    echo "1. Adicionar um produto: Insira o número 1".PHP_EOL;
    echo "2. Remover um produto : Insira o número 2".PHP_EOL;
    echo "3. Verificar Estoque : Insira o número 3".PHP_EOL;
    echo "4. Listar o Estoque: Insira o número 1 ".PHP_EOL;
    echo "5. Sair: Insira o número 5".PHP_EOL;
    $opcao = readline("Digite a sua escolha: ");
    return $opcao;
}

function adicionarProduto(&$estoque, $codigo, $nomeProduto, $tamanho, $cor, $quantidade) {
    $estoque[$codigo] = [
        'codigo' => $codigo,
        'nome' => $nomeProduto,
        'tamanho' => $tamanho,
        'cor' => $cor,
        'quantidade' => $quantidade
    ];
    echo "Produto adicionado com sucesso!".PHP_EOL;
}

function venderProduto(&$estoque, $codigo, $quantidade)
{

    if (!isset($estoque[$codigo])) {
        echo "Esse código do produto não encontrado" . PHP_EOL;
        return;
    }

    if ($quantidade > $estoque[$codigo]['quantidade']) {
        echo "Desculpe! Quantidade insuficiente no estoque." . PHP_EOL;
        return;
    }

    $estoque[$codigo]['quantidade'] -= $quantidade;

if ($estoque[$codigo]['quantidade'] == 0) {
        unset($estoque[$codigo]);
        echo "Produto vendido, estoque esgotado e removido do sistema." . PHP_EOL;
    } else {
        echo "Quantidade de estoque atualizada, produto vendido." . PHP_EOL;
    }
    
}

function verificarEstoque($estoque, $codigo) {
    if (isset($estoque[$codigo])) {
        echo "Produto disponível:".PHP_EOL;
        echo "Código: " . $estoque[$codigo]['codigo'] .PHP_EOL;
        echo "Nome: " . $estoque[$codigo]['nome'] .PHP_EOL;
        echo "Tamanho: " . $estoque[$codigo]['tamanho'].PHP_EOL;
        echo "Cor: " . $estoque[$codigo]['cor'] .PHP_EOL;
        echo "Quantidade: " . $estoque[$codigo]['quantidade'].PHP_EOL;
    } else {
        echo "Produto não disponível no estoque".PHP_EOL;
    }
}


function listarEstoque($estoque) {
    if (!empty($estoque)) {
        foreach ($estoque as $produto) {
            echo "|Código: " . $produto['codigo'] .PHP_EOL;
            echo "|Nome: " . $produto['nome'].PHP_EOL;
            echo "|Tamanho: " . $produto['tamanho'] .PHP_EOL;
            echo "|Cor: " . $produto['cor'] .PHP_EOL;
            echo "|Quantidade: " . $produto['quantidade']  .PHP_EOL;
            echo "-------------------------" .PHP_EOL;
        }
    } else {
        echo "Estoque vazio".PHP_EOL;
    }
}



while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto" .PHP_EOL;
            $codigo = readline("Digite o Código do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $tamanho = readline("Digite o Tamanho: ");
            $cor = readline("Digite a Cor: ");
            $quantidade = readline("Digite a Quantidade: ");
            adicionarProduto($estoque, $codigo, $nome, $tamanho, $cor, $quantidade);
            break;
        case 2:
            echo "Remover um produto".PHP_EOL;
            $codigo = readline("Digite o código do produto: ");
            $quantidade = readline("Digite a quantidade que foi vendida: ");
            venderProduto($estoque, $codigo, $quantidade);
            break;
        case 3:
            echo "Verificar Estoque".PHP_EOL;
            $codigo = readline("Digite o código do produto: ");
            verificarEstoque($estoque, $codigo);
            break;
        case 4:
            echo "Listar o Estoque".PHP_EOL;
            listarEstoque($estoque);
            break;
        case 5:
            echo "Saindo...".PHP_EOL;
            exit;
        default:
            echo "Opção inválida, por favor tente novamente mais tarde.".PHP_EOL;
            break;
    }
}
?>
