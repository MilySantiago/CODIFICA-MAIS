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
            echo "Saldo Insuficiente".PHP_EOL;
        }
        
    }
    
    public function exibirSaldo() {
        echo "Nome:".$this->nomeDotitular. "|".PHP_EOL;
        echo "Id da conta:". $this->idDaConta."|".PHP_EOL;
        echo "Saldo Atual:". $this->saldo;  
    }

}

