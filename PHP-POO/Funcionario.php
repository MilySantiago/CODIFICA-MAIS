<?php
class Funcionario{

    private string $nome;
    private string $cargo;
    private float $salario;

    public function __construct($nome, $cargo, $salario) {
            $this-> nome = $nome;
            $this -> cargo = $cargo;
            $this-> salario= $salario;
    }
    

    public function ajustarSalario($novoSalario){

     if ($this->salario == $novoSalario){
        echo " Náo é possivel fazer essa alteração.".PHP_EOL;
    } else {
        $this->salario = $novoSalario;
        echo '  Salário atualizado.'.PHP_EOL;
    }

     echo " O novo salário" .$this->nome. PHP_EOL. " é de: " . $this->salario.PHP_EOL. "R$:|" .PHP_EOL;

    
}
    
    public function alterarCargo(string $novoCargo){
        $this->cargo = $novoCargo;
        echo $this->nome. " Este funcionário teve seu cargo atualizado para". $this->cargo. PHP_EOL;

    
        
    }
    
    public function exibirDetalhes(){
        echo "Ficha Funcionário:". PHP_EOL;
        echo "Nome:".$this->nome. "|".PHP_EOL;
        echo "Cargo:". $this->cargo."|".PHP_EOL;
        echo "Salário: R$". $this->salario. "|";
          
    }
}



