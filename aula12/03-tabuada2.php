<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Estrutura Condicional While em PHP</title>
</head>
<body>
    <div>  
        <?php
        $n = $_GET["num"]?$_GET["num"]:1;
        echo "<h1>Tabuada do $n</h1>";
        $i = 1;
        while ($i <= 10) {
            $m = $n * $i;
            echo "$n X $i = $m</br>";
            $i++;
        }

        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>

