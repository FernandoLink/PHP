<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>ucfirst</title>
</head>

<body>
    <div>
        <?php
        $nome = "fernando link";
        // ucfirst coloca a primeira letra em maiúscula
        print("Seu nome é ".ucfirst($nome).".");
        ?>
    </div>
</body>

</html>