<?php
    include_once 'Retangulo.class.php';
    $retangulo1 = new Retangulo(5,8);

    echo $retangulo1->calcularArea() ."<br>";
    echo $retangulo1->calcularPerimetro();
?>