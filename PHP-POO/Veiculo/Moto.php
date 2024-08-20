<?php
require 'Veiculo.php';

class Moto extends Veiculo{
    public function acelerar(){
        return "A moto de marca". $this->marca.PHP_EOL. "com a coloração".PHP_EOL. $this->cor. PHP_EOL. "de modelo". $this->modelo.PHP_EOL."fabricado em:". PHP_EOL.$this->anoDefab. "acelerou";

    }
    public function frear(){
        return "A moto de marca". $this->marca.PHP_EOL. "com a coloração".PHP_EOL. $this->cor. PHP_EOL. "de modelo". $this->modelo.PHP_EOL."fabricado em:". PHP_EOL.$this->anoDefab. "freou";
    }
    public function exibirDetalhes(){
        return "Esta moto de marca". $this->marca.PHP_EOL. "com a coloração".PHP_EOL. $this->cor. PHP_EOL. "de modelo". $this->modelo.PHP_EOL."fabricado em:". PHP_EOL.$this->anoDefab;
        
    }
    

}