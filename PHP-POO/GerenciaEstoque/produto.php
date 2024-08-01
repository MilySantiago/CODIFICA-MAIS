<?php

require_once 'ProdutoInterface.php';


class Produto implements ProdutoInterface{
    
    private $estoque;
    private $sku;
    private $nome; 
    private $unidade_medida;
    private $quantidade;
    private $preco;
    private $cor;

   public function __construct(&$estoque, $sku, $nome, $unidade_medida, $quantidade, $preco) {
        $this->estoque = $estoque;
        $this->sku = $sku;
        $this->nome = $nome;
        $this->unidade_medida = $unidade_medida;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
        $this->cor = $cor;
    }

    public function getEstoque(){
        

    }
    public function getSku(){
        
    }
    public function getNome(){
        
    }
    public function getUnidadeMedida(){

    }
    public function getPreco(){

    }
    public function getQuantidade(){

   }
  
     public function getCor(){

  }
}