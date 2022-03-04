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
            $v = isset($_GET['val']) ? $_GET['val'] : 1;
            echo "<h1>Calculando o fatorial de $v.</h1>";
            $c = $v;
            $f = 1;
            do {
                $f *= $c; 
                $c--;
            } while ($c >= 1);
            echo "<h2>$v! = $f.</h2>";
        ?>
        <br>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>
</html>

