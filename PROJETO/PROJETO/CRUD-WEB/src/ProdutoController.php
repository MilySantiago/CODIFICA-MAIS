<?php
namespace App\Controller;

class ProdutosController{

public function listar() {

 require __DIR__ .  '/../view/Produto/listagem.php';
}

public function criar() {

    require __DIR__ .  '/../view/Produto/adicionar.php';
}

public function editar(){
    $id= $_GET['id'];
    $produtos=$_SESSION['produtos'];
    $produtos= ['id'];

   require __DIR__ . '/../view/Produto/editar.php';
}


}