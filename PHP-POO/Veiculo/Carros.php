<?php
require 'Veiculo.php';

 class Carro extends Veiculo{
    public function acelerar(){
        return "O carro de marca". $this->marca.PHP_EOL. "com a coloração".PHP_EOL. $this->cor. PHP_EOL. "de modelo". $this->modelo.PHP_EOL."fabricado em:". PHP_EOL.$this->anoDefab. "acelerou";


    }
    public function frear(){
        return "O carro de marca". $this->marca.PHP_EOL. "com a coloração".PHP_EOL. $this->cor. PHP_EOL. "de modelo". $this->modelo.PHP_EOL."fabricado em:". PHP_EOL.$this->anoDefab. "acelerou";
    }
    public function exibirDetalhes(){
        return "Este carro de marca". $this->marca.PHP_EOL. "com a coloração".PHP_EOL. $this->cor. PHP_EOL. "de modelo". $this->modelo.PHP_EOL."fabricado em:". PHP_EOL.$this->anoDefab;
    }


}