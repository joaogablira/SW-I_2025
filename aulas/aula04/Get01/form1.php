<?php
    $nome = $_GET['nome'];
    $media = ($_GET['num1'] + $_GET['num2'] + $_GET['num3']) / 3;

    echo "Nome do estudante: $nome <br>";
    echo "A média das  suas notas é: $media <br>";
?>