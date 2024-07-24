<?php
class ContaBancaria {

    private $idDaConta;
    private $nomeDotitular;
    private $saldo;

    public function __construct($idDaConta, $nomeDotitular, $saldo) {
            $this-> idDaConta = $idDaConta;
            $this -> nomeDotitular = $nomeDotitular;
            $this-> saldo= $saldo;
    }
        
    public function depositar($deposito){
        $this->saldo= $this-> saldo + $deposito;
    }
    
    public function sacar($valorSacado){
    
        if(($this->saldo >0)){
            $this->saldo=$this->saldo - $valorSacado;
        } else {
            echo "Saldo Insuficiente";
        }
        
    }
    
    public function exibirSaldo() {
        echo "Saldo Atual". $this->saldo. "<br>";    
    }

}


$novaConta = new ContaBancaria(1, 'Teste', 0);
$novaConta->exibirSaldo();
$novaConta->depositar(100);
$novaConta->exibirSaldo();
$novaConta->sacar(20);
$novaConta->exibirSaldo();


