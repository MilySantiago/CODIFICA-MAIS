<?php
class Produto {

    public  $nome;
    public  $preco;
    public  $quantidadeEstoque;

    public function __construct($nome, $preco, $quantidadeEstoque) {
            $this-> nome= $nome;
            $this -> preco = $preco;
            $this-> quantidadeEstoque = $quantidadeEstoque;
    }

    public function alterarpreco($novoPreco){
        if ($novoPreco > 0){
            echo "Não é possível alterar para este preço.". PHP_EOL;
        } else if ($novoPreco == $this->preco){
            echo "Não é possível alterar o preço para o mesmo valor.". PHP_EOL;
        } else {
            $this->preco = $novoPreco;
            echo "Alterado com sucesso!";
        } 
        echo "Novo preço é de: " . $novoPreco . "R$:" . PHP_EOL;
    } 
        
    
    
        
    public function ajustarEstoque($quantidade){
        if ($quantidade >= 0) {
            $this->quantidadeEstoque = $quantidade;
            echo "Estoque ajustado para:". $quantidade . PHP_EOL;
        } else {
            echo "Erro, Não foi possível fazer essa alteração:" . PHP_EOL;
        }
    }
        
    
    
    public function exibirDetalhes(){
        echo "Detalhes de um produto:". PHP_EOL;
        echo "Nome:".$this->nome. "|".PHP_EOL;
        echo "Quantidade:". $this->quantidadeEstoque."|".PHP_EOL;
        echo "Preço: R$". $this->preco. "|";
    
        
    }
    
}  
        



 

