<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>stripos</title>
</head>

<body>
    <div>
        <?php
        $frase = "Estou aprendendo PHP.";
        $pos = stripos($frase, "phP");
        echo "$frase<br/>A string foi encontrada na posição $pos.";
        ?>
    </div>
</body>

</html>