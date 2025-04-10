<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-01</title>
</head>
<body>
    <style>
        h1 {
            text-align: center;
        }
        
        table, tr, td, th {
            margin: auto;
            border: 1px solid black;
            text-align: center;
        }
    </style>

    <?php 
        $cor = "#f7d7d7";
        $cor2 = "#9bbccc";
    ?>

    <table>
        <tr>
            <th>Coluna-01</th>
            <th>Coluna-02</th>
            <th>Coluna-03</th>
            <th>Coluna-04</th>
        </tr>

        <?php 
            for ($i = 1; $i <= 8; $i++) { 
                if ($i % 2 == 0) {
                    echo "<tr style='background-color: $cor;'>";
                } else {
                    echo "<tr style='background-color: $cor2;'>";
                }
        
                echo "
                    <td>Linha $i</td>
                    <td>Linha $i</td>
                    <td>Linha $i</td>
                    <td>Linha $i</td>
                </tr>";
            }
        ?>
    </table>

</body>
</html>