<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Estrutura Condicional Switch em PHP</title>
</head>
<body>
    <div>  
        <?php
            $d = isset($_GET["ds"]) ? $_GET["ds"]:0;
            switch ($d) {
                case 1:
                case 7:
                    echo "Descanse, final de semana. ;)";
                    break;
                case 2:
                case 3:
                case 4: 
                case 5: 
                case 6: 
                    echo "Levanta e vai estudar! :)";
                    break;
                default:
                    echo "Dia da semana inválido!";
                    break;
            }
        ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>

