<?php
    include_once 'Funcionario.class.php';
    $funcionario1 = new Funcionario("JG",200);


    $funcionario1->aumentarSalario(50);
    $funcionario1->exibirInformacoes();
?>