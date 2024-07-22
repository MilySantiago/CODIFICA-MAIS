<?php
class Carro{
    public $marca;
    public $modelo;
    public $anoDeFab;
    public $cor;

   public function _construct($marca, $modelo, $anoDeFab, $cor){
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->anodeFab = $anoDeFab;
    $this->cor = $cor;

   }
   public function ligar (){
    return "Este carro de marca". $this->marca . "e" . $this->modelo . "fabricado em" . $this->anoDeFab. "com a coloração". $this->cor. "está ligando.";
    } 

 public function acelerar(){
 return "Este carro de marca". $this->marca . "e" . $this->modelo . "fabricado em" . $this->anoDeFab."está acelerando.";
 }

 public function frear(){
    return "Este carro de marca". $this->marca . "e" . $this->modelo . "fabricado em" . $this->anoDeFab."está freando e vai estacionar.";

 }
}


