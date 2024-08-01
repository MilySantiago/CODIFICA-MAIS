<?php

interface ProdutoInterface{
  public function getEstoque();
  public function getSku();
  public function getNome();
  public function getUnidadeMedida();
  public function getQuantidade();
  public function getPreco();
  public function getCor();
}
