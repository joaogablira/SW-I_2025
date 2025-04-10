<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício-03</title>
</head>
<body>

    <style>
        h1,h2 {
            text-align: center;
        }
        
        table, tr, td, th {
            margin: auto;
            border: 1px solid black;
            text-align: center;
        }
    </style>

    <?php

        $produtos = [
            [
                "nome"=>"cadeira",
                "preco"=>"110",
                "categoria"=>"móvel"
            ],
            [
                "nome"=>"Pelúcio",
                "preco"=>"20.5",
                "categoria"=>"brinquedo"
            ],
            [
                "nome"=>"Lanterna",
                "preco"=>"15",
                "categoria"=>"utilitário"
            ]
        ]
    ?>


    <?php
        $cor = [
            "móvel" => "#9bbccc",
            "brinquedo" => "#a6cfa5",
            "utilitário" => "#e6ed5f"
        ];
    ?>

    <h2>Tabela de Produtos</h2>

    <table>
        <tr>
            <th>Nome</th>
            <th>Preço (R$)</th>
            <th>Categoria</th>
        </tr>
    <?php 
        foreach ($produtos as $produto) {
            echo "<tr style='background-color: " . $cor[$produto['categoria']] . ";'>";
            echo "<td>" . $produto['nome'] . "</td>";
            echo "<td>" . number_format($produto['preco'], 2, ',', '.') . "</td>";
            echo "<td>" . $produto['categoria'] . "</td>";
            echo "</tr>";
        }
    ?>
</body>
</body>
</html>