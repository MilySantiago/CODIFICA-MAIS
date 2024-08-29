<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Listagem de produtos</title>
    <script src="https://kit.fontawesome.com/addd3116cc.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="master"> 

<div class="container">
    
<div class="coluna">

<div class="addItem">


<button> Novo Item </button>

</div>

<div class="pesquisar"> <div>   <div class="barra_pesquisar">
<button class="botao-pesquisa">
            <i class="fa-solid fa-magnifying-glass"></i>
            </button>
<input type="text" placeholder="Buscar item" class="barra_pesquisar_original"> </div> </div>
    
</div>

</div>

<div class="lista-itens">

<div class="camisa"> 



<div class= "informacoes"> 

<div class=lado-um> 

<div class="separacao"> 
<div class="id"> #000001</div>
<div class="secao"> <button>Vestuário </button> </div>
</div>

<div class="produto"> Camisa Codifica+ </div>
<div class="botao-editar"> <button> Editar </button>
</div>
</div>

<div class=" lado-dois"> 
<div class="chave"> SKU: 123456 </div>
<div class="quantidade"> Quantidade: 100 </div>
<div class="botao-deletar"> <button> Deletar </button>
</div>
</div>

</div>

</div>



<div class="ItemDois"> 

<div class="lado-tres"> 


<div class="separacao dois"> 
<div class="idDois"> #000002</div>
<div class="secaoDois"> Eletronico </div>
</div>

<div class="produtoDois"> Notebook </div>
<div class="botaoeditar">  <button> Editar </button>
</div>
</div>

<div class="lado-quatro"> 
<div class="chaveDois"> SKU:123456 </div>
<div class= "quantidadeDois"> Quantidade: 45 </div>
<div class="botaod-dois"> <button> Deletar </button>
</div>
</div>





</div>


<div class="ItemTres"> 

<div class="lado-cinco"> 


<div class="separacao tres"> 
<div class="idTres"> #000003</div>
<div class= "secaoTres"> Escritório </div>
</div>

<div class="produtoTres"> Caderno de anotação </div>
<div class="editar">  <button> Editar </button>
</div>
</div>

<div class="lado-seis"> 
<div class="chaveTres"> SKU: 123456 </div>
<div class="quantidadeTres"> Quantidade: 45 </div>
<div class="deletar"> <button> Deletar </button>

</div>

</div>





























    </div>
</body>
</html>