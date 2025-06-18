<?php
    include_once 'Livro.class.php';
    $livro1 = new Livro("1984", "George Orwell", True);

    echo $livro1->exibirStatus() . "<hr>";
    echo $livro1->emprestar() . "<hr>";
    echo $livro1->emprestar() . "<hr>";
    echo $livro1->exibirStatus() . "<hr>";
    echo $livro1->devolver() . "<hr>";
    echo $livro1->exibirStatus() . "<hr>";
?>
