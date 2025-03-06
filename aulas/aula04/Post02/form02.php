<?php
    $nome =  $_POST['xnome'];
    $email =  $_POST['xemail'];
    $datan =  $_POST['xdatan'];
    $cartaobd =  $_POST['xcartaobd'];

    echo"INFORMAÇÕES DO USUÁRIO <br>";
    echo "Nome do usuário: $nome!<br>Dono do email: $email<br>Data de nascimento: $datan<br>Bandeira do Cartão: $cartaobd.";
    
?>