<?php


class ProdutoPerecivel extends Produto{
    public $validade;
    public $fabricacaoData;
    public $dataAtual;

public function __construct($validade, $fabricacaoData, $dataAtual) {
    $this->validade = $validade;
    $this->fabricacoData = $fabricacaoData;
    $this->dataAtual = $dataAtual;
}


public function avisoDevalidade(){
    if($this-> validade>=90){
        return 'Este produto está vencido';

    }else{
        return 'Este produto está quase vencendo.';
    }
}


/*
 $dataAtual = new DateTime(date('Y-m-d'));
 $validade = new DateTime('2016-10-01');

$dataAtual = $data_atual->diff($data_expiracao);

echo $intervalo_em_dias->format('%R%a dias');
*/


}