<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - POO</title>
</head>

<body>
    <pre>
        <?php
            require_once 'ContaBanco.php';
           
            $cc1 = new ContaBanco();
            print_r($cc1);
        ?>
    </pre>
</body>

</html>