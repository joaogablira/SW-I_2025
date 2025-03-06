<?php
    $n1 = $_GET['num1'];
    $n2 = $_GET['num2'];
    $n3 = $_GET['num3'];

    if (($n1 > $n2) && ($n1 > $n3)){
        $maiornum = $n1;
    }
    elseif (($n2 > $n1) && ($n2 > $n3)){
        $maiornum = $n2;
    }
    else{
        $maiornum = $n3;
    }
        
    echo "o maior número é: $maiornum <br>";
?>