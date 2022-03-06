<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>wordwrap</title>
</head>

<body>
    <div>
        <?php
        $txt = "Aqui tem um texto gigante que vai mostrar o resultado da função wordwrap com um texto gigante criado pelo PHP.";
        $res = wordwrap($txt, 20, "<br/>\n", false);
        echo $res;
        ?>
    </div>
</body>

</html>