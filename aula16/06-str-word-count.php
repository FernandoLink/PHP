<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>str_word_count</title>
</head>

<body>
    <div>
        <?php
        // Existe também o ltrim e o rtrim 
        $frase = "Eu vou estudar PHP agora";
        /* 0 - contar as palavras
           1 - vai retornar um vetor
           2 - vai retornar um vetor também com o índice diferente */
        $cont = str_word_count($frase, 0);
        echo "<p>$cont</p>";
        ?>
    </div>
</body>

</html>