<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Variável de Variável</title>
</head>
<body>
    <div>    
        <?php
            $x = "abc";
            $$x = "def"; // variável de variável utiliza-se mais um $ na frente da variável
            echo "O conteúdo da variável <strong>x</strong> é $x.";
            echo "<br/>A variável <strong>$x</strong> criada recebeu o valor $abc.";
        ?>
    </div>
</body>
</html>