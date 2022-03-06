<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>trim</title>
</head>

<body>
    <div>
        <?php
        /* Existe também o ltrim e o rtrim */
        $txt = "    Fernando Link.    ";
        $tam = strlen($txt);
        echo "<p>$tam</p>";
        $novo = strlen(trim($txt));
        echo "<p>$novo</p>";
        ?>
    </div>
</body>

</html>