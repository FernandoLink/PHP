<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Estrutura Condicional Do While em PHP</title>
</head>
<body>
    <div>  
        <?php
            $n = isset($_GET['num']) ? $_GET['num'] : 1;
            for($c = 1; $c <= 10; $c++) {
                $r = $n * $c;
                echo "$n x $c = $r<br/>";
            }
        ?>
        <br>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>
</html>

