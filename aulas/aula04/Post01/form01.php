<?php
    $login = $_POST['xlogin'];
    $senha = $_POST['xsenha'];

    if (($login == 'etec') && ($senha == 'informática')){
        echo "Logado com Sucesso!";
    }
    else{
        echo "Login ou/e senha incorretos...Tente novamente.";
    }
?>