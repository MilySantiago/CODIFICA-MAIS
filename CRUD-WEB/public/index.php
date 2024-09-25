
<?php

use APP\Controller\ProdutosController;

    session_start();

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


