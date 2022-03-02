<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Estrutura Condicional If em PHP</title>
</head>
<body>
    <div>  
        <?php
            $a = isset($_GET["ano"]) ? $_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tem $i anos.<br>";
            if ($i >= 18) {
                $v = "já pode votar";
                $d = "já pode dirigir.";
            } else if ($i) {
                $v = "não pode votar";
                $d = "não pode dirigir.";
            }
            echo "Com essa idade você $v e também $d";
        ?>
        <a href="exercicio01.html"><br/>Voltar</a>
    </div>
</body>
</html>

