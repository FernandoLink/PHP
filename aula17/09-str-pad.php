<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>str_pad</title>
</head>

<body>
    <div>
        <?php
        $nome = "Link";
        $novo = str_pad($nome, 30, "#", STR_PAD_LEFT);
        print("Meu professor $novo é lindo.");
        ?>
    </div>
</body>

</html>