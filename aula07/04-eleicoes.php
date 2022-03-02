<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operador Lógico</title>
</head>
<body>
    <div>    
        <?php
            $ano = $_GET['an'];
            $idade = 2021 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos.<br/>";
            echo "E dessa forma seu voto é ".(($idade>19 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO").".";
        ?>
    </div>
</body>
</html>