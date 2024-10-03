<?php
namespace APP;

use Produto;

class Produtos{

    public function listar(){
    $pdo = new \PDO('mysql:host=localhost;dbname=controles_produto', 'root', 'kamilysa');
    $tabela= "SELECT * FROM categoria";
    $statement = $pdo->query($tabela);
    $produtos = $statement->fetchAll(\PDO::FETCH_ASSOC);
    var_dump($produtos);
    
}

}


$teste= new Produtos();
$teste->listar();
