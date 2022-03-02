<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Dados de Formulário em PHP</title>
</head>
<body>
    <div>  
        <?php
            $valor = isset($_GET['v'])?$_GET['v']:0;
            echo "O valor enviado foi $valor e raiz quadrada é ".number_format(sqrt($valor),2).".";
        ?>
        <a href="01exercicio.html"><br/>Voltar</a>
    </div>
</body>
</html>

