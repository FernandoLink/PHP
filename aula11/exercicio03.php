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
            $ini = isset($_GET['ini']) ? $_GET['ini'] : 0;
            $fim = isset($_GET['fim']) ? $_GET['fim'] : 0;
            $inc = isset($_GET['inc']) ? $_GET['inc'] : 0;
            if ($ini <= $fim) {
                while ($ini <= $fim) {
                    echo $ini." ";
                    $ini += $inc;
                }
            } else {
                while ($ini >= $fim) {
                    echo $ini." ";
                    $ini -= $inc;
                }
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>

