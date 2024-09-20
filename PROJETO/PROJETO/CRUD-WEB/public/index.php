
<?php

use App\Controller\ProdutosController;

    session_start();

    require __DIR__ . "/../vendor/autoload.php";
    require __DIR__ . '/../helper.php';
    require __DIR__ . '/../src/ProdutoController.php';
    


    $_SESSION['produtos'] = [[
        'id' => 1,
        'nome' => 'Camiseta Codifica +',
        'sku' => '123456',
        'unidade_medida_id' => '1',
        'valor' => 1500.00,
        'quantidade' => 10,
        'categoria' => 'vestuário', 
        'categoria_id' => '1',
    ],[
        'id' => 2,
        'nome' => 'Geladeira',
        'sku' => '123457',
        'unidade_medida_id' => '2',
        'valor' => 2500.00,
        'quantidade' => 5,
        'categoria_id' => '2',
    ],
];

    $caminho = rtrim($_SERVER['PATH_INFO'], '/');

    $produto = new ProdutosController();

     if ($caminho == "/listar") {
        return $produto->listar();
    }

    if ($caminho == "/criar") {
         return $produto->criar();
    }

    if ($caminho == "/editar") {
         return $produto->editar();
    }


