<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  

        $dados = [
            [
                "nome" => "Miguel",
                "idade" => 20,
                "tel" => "321312321",
                "cidade" => "Ribeirão Pires"  
            ],
            [
                "nome" => "João Gabriel",
                "idade" => 15,
                "tel" => "123123123",
                "cidade" => "Ribeirão Pirea"  
            ]
        ];

        //echo $dados[1]["nome"];
        //print_r($dados[1]);        
        // foreach ($dados as $conteudo) {
        //     echo $conteudo."<br>";
        // }

        foreach ($dados as $chave => $valor) {
            //echo "Chave externa: ". $chave."<br>";
            foreach ($dados[$chave] as $key => $valor) {
                echo "$key: " . $valor . "<br>";
            }
            echo "<hr>";
        }   
        
    ?>    
</body>
</html>