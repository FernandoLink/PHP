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
            $nome = isset($_GET['nome'])?$_GET['nome']:"[não informado]";
            $ano = isset($_GET['ano'])?$_GET['ano']:"[não informado]";
            $sexo = isset($_GET['sexo'])?$_GET['sexo']:"[sem sexo]";
            $idade = date("Y") - $ano;
            echo "$nome é $sexo e tem $idade anos."
        ?>
        <a href="02exercicio.html"><br/>Voltar</a>
    </div>
</body>
</html>

