<?php
namespace App\Controller;

class ProdutosController{

public function listar() {
 require __DIR__ .  '/public/listagem.php';

}

public function criar(){
    require __DIR__ . '/public/adicionar.php';
}

public function editar(){
    
require __DIR__ . '/public/editar.php';
}

}