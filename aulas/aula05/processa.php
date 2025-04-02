<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email == "joaogablira@email.com" && $senha == "1234"){
        //manda para privada.php
        $nome = "João Gabriel";
        header('Location:privada.php?nome='.$nome);
        
    }else{
        //manda para erro.php
        header('Location: erro.php');
    } 
?>