<?php
    include_once 'Produto.class.php';

    $produto1 = new Produto("Mouse", 150.00, 10);
    
    $produto1->adicionarEstoque(5);
    $produto1->mostrarDetalhes();
    $produto1->RemoverEstoque(3);
    $produto1->mostrarDetalhes();
?>
