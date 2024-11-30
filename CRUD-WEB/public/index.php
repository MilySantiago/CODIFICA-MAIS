
<?php

use APP\Controller\ProdutosController;

    session_start();

    if (empty($_SESSION));
    
    $_SESSION['categorias'] = [
     '1' => 'Eletrônicos',
     '2' => 'Eletrodomésticos',
     '3' => 'Móveis',
     '4' => 'Decoração',
     '5' => 'Vestuário',
     '7' => 'Outros'
 ];

 $_SESSION['unidades_medidas'] = [
     '1' => 'Un',
     '2' => 'Kg',
     '3' => 'g',
     '4' => 'L',
     '5' => 'mm',
     '6' => 'cm',
     '7' => 'm',
     '8' => 'm²',
 ];

 $_SESSION['produtos'] = [[
         'id' => 1,
         'nome' => 'Smartphone',
         'sku' => '123456',
         'unidade_medida_id' => '1',
         'valor' => 1500.00,
         'quantidade' => 10,
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



    require __DIR__ . "/../vendor/autoload.php";
    require __DIR__ . '/../helper.php';
    require __DIR__ . '/../src/Controller/ProdutoController.php';
    
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


