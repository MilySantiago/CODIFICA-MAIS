<?php

interface Estoque {
    public  function adicionarProduto();
    public function venderProduto();
    public function verificarEstoque();
    public function atualizarEstoque();
    public function listarEstoque();
    public function deletarProduto();
    public function totalTiposEQuantidades();
    public function exibirmenu();
 }
