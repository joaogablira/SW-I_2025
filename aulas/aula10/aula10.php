<?php
    include_once 'Conta.class.php';

    $conta1 = new Conta();

    $conta1->Nome = "Fulano da Silva";
    $conta1->Cpf = "123.456.789-00";
    //$conta1->Saldo = 1500;


    $conta1->ConsultarSaldo();
    echo "<hr>";

    $conta1->Depositar(500);
    echo "<hr>";

    $conta1->ConsultarSaldo();
    echo "<hr>";

    echo $conta1->Sacar(700);
    echo "<hr>";

    $conta1->ConsultarSaldo();
    echo "<hr>";
?>