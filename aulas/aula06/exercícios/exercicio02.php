<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício-02</title>
</head>
<body>
    
</body>
    <form method="GET">
        <p>Digite ou selecione a quantidade de linhas que deseja: <input type="number" name="linha"></p>
        <p>Digite ou selecione a quantidade de colunas que deseja: <input type="number" name="coluna"></p>
        <input type="submit" value="Enviar">
    </form>

    <table>
        <tr>
        <?php
            echo "<table border='1'>";
            $linha = @$_GET['linha'];
            $coluna = @$_GET['coluna'];
            $x = 1;
            while ($x<=$coluna){
                echo "<th>Coluna:$x</th>";
                $x++;
            }
        ?>
        </tr>
        <?php

            $i = 1;        
            while ($i<= $linha){
                
                echo "<tr>";
                $x = 1;
                while ($x<=$coluna){
                        echo "<td>Linha $i, Coluna $x</td>";
                        $x++;     
                }
                echo "</tr>";
                $i++;
                
            }
        ?>
        
    </table>
</body>
</html>