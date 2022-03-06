<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Passagem de Parâmetro por Referência</title>
</head>

<body>
    <div>
        <?php
        /* include - continua executando se não encontrar o arquivo
           require - não continua executando se não encontrar
           include_once - só carrega a primeira vez
           require_once - só carrega a primeira vez
        */
            require_once "funcoes.php"; 
            echo "<h1>Testando novas funções</h1>";
            ola();
            mostraValor(4);
            echo "<h2>Finalizando programa...</h2>";
        ?>
    </div>
</body>

</html>