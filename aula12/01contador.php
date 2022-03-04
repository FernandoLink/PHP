<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Estrutura Condicional Do While em PHP</title>
</head>
<body>
    <div>  
        <?php
            $c = 0;
            do {
                echo " $c";
                $c += 2;
            } while ($c <= 20);
            $c = 10;
            echo "<br>";
            do {
                echo " $c";
                $c--;
            } while ($c >= 1);
        ?>
    </div>
</body>
</html>

