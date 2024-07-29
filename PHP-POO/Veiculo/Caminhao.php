<?php
require 'Veiculo.php';

class Caminhao extends Veiculo{
    public function acelerar(){
       return "o caminhão de marca". $this->marca.PHP_EOL. "com a coloração".PHP_EOL. $this->cor. PHP_EOL. "de modelo". $this->modelo.PHP_EOL."fabricado em:". PHP_EOL.$this->anoDefab. "acelerou";

    }
    public function frear(){
        return "o caminhão de marca". $this->marca.PHP_EOL. "com a coloração".PHP_EOL. $this->cor. PHP_EOL. "de modelo". $this->modelo.PHP_EOL."fabricado em:". PHP_EOL.$this->anoDefab. "freou";

    }
    public function exibirDetalhes(){
         return "Este caminhão de marca". $this->marca.PHP_EOL. "com a coloração".PHP_EOL. $this->cor. PHP_EOL. "de modelo". $this->modelo.PHP_EOL."fabricado em:". PHP_EOL.$this->anoDefab;

        
    }
    

}