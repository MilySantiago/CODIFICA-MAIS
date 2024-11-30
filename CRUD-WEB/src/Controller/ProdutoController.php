<?php
namespace APP\Controller;

class ProdutosController{


public function listar() {
    
require __DIR__ .  '/../view/Produto/listagem.php';


}

public function criar() {
    
    require __DIR__ .  '/../view/Produto/adicionar.php';
}

public function editar(){
   

   require __DIR__ . '/../view/Produto/editar.php';
}
 public function salvar (){
    dd($_GET, $_POST);
 }

}