<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Estrutura Condicional While em PHP</title>
</head>
<body>
    <div>  
        <?php
            $c = 1;
            while ($c <= 9) {
                echo $c."<br />";
                $c++;
            }
            while ($c >= 1) {
                echo $c."<br />";
                $c--;
            }
        ?>
    </div>
</body>
</html>

