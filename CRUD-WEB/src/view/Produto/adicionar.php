<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "/css/adicionar.css">
    <title>Criar um produto</title>
</head>
<body>




<div class= "master">
    <div class= "container">

<div class= "titulo"> Novo Item</div>

<div class= "nome">
    <div> Nome do Item
    <input type="text" placeholder="" class= "inserir-nome">
        </input>
    </div>
</div>

 <div class= "separacao">
<div>
    <div> SKU<input type="text" placeholder="" class="inserir-chave"></div>
</div>

<div>
    <div> Unidade de medida <input type="text" placeholder="" class="inserir-unidade"></div>
</div>

</div>


<div class="separacaodois">

<div>
    <div> Valor <input type="text" placeholder="" class="inserir-valor"></div>
</div>


<div>
    <div> Quantidade <input type="text" placeholder="" class="inserir-quantidade"></div>
</div>


</div>

<div> Categoria
    <select  class="categoria">
         <option value="vestuario"> Vestuário</option>
         <option value="eletronico"> Eletrônico</option>
         <option value="escritorio"> Escritório</option>
         <option value="farmacia"> Farmácia</option>
         <option value="alimentos"> Alimentos</option>
         <option value="entretenimento"> Entretenimento</option>
</select>
</div>



<div class="espacamento">
<a href="/editar"> <button class= "editar">Editar Item</button></a>
<a href="/listar"> <button class= "voltar">Lista</button></a>

</div>
</div>
</div>







</body>
</html>