<?php

require 'classes/Produto.php';

$pro = new Produto();

//$produtos = $pro -> getProdutoLike('celular');

//$produtos = $pro -> updateProduto('Mouse', 'Mouse Gamer', 200, 2);

//$produtos = $pro -> addProduto('nlé', 'blé', 1800);

$produtos = $pro -> deleteProduto(5);
$produtos = $pro -> listar();

foreach($produtos as $produto) {
    echo $produto ['nome'];
    echo '<br/>';
}

?>