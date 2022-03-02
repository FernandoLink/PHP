<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Diferença Operador Igual e Idêntico</title>
</head>
<body>
    <div>    
        <?php
            $a = 3;
            $b = "3";
            $r = ($a == $b) ? "SIM":"NÃO";
            echo "As variáveis A e B são iguais (conteúdo igual)? $r.<br/>";
            $r = ($a === $b) ? "SIM":"NÃO"; 
            echo "As variáveis A e B são idênticas (conteúdo e tipo igual)? $r.";
        ?>
    </div>
</body>
</html>