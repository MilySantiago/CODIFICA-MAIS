<?php

abstract class Veiculos{
    protected $marca;
    protected $cor;
    protected $modelo;
    protected $anoDefab;

    public function __construct($marca, $cor, $modelo, $anoDefab) {
        $this-> marca= $marca;
        $this-> cor= $cor;
        $this-> modelo= $modelo ;
        $this-> anoDefab= $anoDefab;
    }

    
}




