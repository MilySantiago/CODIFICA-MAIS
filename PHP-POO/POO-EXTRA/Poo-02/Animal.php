<?php


interface Animal{
    public function fazerSom();
}

abstract class Mamifero implements Animal{
    protected $especie;

    public function __construct($nome){
        $this->$especie = $especie;
    }
}

class Cachorro extends Mamifero{
    public function fazerSom(){
        return "O cachorro emiti um som, ou seja $this->especie um latido" . PHP_EOL . "AUAUAUAU" . PHP_EOL . "Floquinho latiu";
    }
}

class Gato extends Mamifero{
    public function fazerSom(){
        return "O gato emiti um som, ou seja $this->especie um miado" . PHP_EOL . "MiAAU" . PHP_EOL. "Mingau miou";

       
    }
}

function fazerAnimalEmitirSom($animal){
    echo $animal->fazerSom() . PHP_EOL;

}

require_once __DIR__ . '/autoloadAnimal.php';

$som = new Animal();
$cachorro->fazerSom() . PHP_EOL;

$som = new Animal();
$gato->fazerSom() . PHP_EOL;