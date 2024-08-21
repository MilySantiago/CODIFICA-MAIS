<?php

require_once __DIR__ . '/autoload.php';


class Forma {
    public function calcularArea(){
    return 0;
    }

}


class Retangulo extends Forma {
    private $largura;
    private $altura;

    public function construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }
}

class Circulo extends Forma {
    private $raio;

    public function construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }
}
.


$retangulo = new Retangulo(5, 10);
$retangulo->calcularArea() . PHP_EOL;

$circulo = new Circulo(7);
 $circulo->calcularArea() . PHP_EOL;