<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilidade de Objetos</title>
</head>

<body>
    <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta();
            $c1->modelo = "BIC cristal";
            $c1->cor = "Azul";
            $c1->rabiscar();
            $c1->tampar();
            print_r($c1);            
        ?>
    </pre>
</body>

</html>