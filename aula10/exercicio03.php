<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Regiões dos Estados Brasileiros</title>
</head>
<body>
    <div>  
        <?php
            $estado = isset($_GET["est"]) ? $_GET["est"]:PR;
            switch ($estado) {
                case "AC":
                    echo "Região: <span class='foco'>Norte.</span><br>";
                    echo "Estado: <span class='foco'>Acre.</span><br>";
                    echo "Capital: <span class='foco'>Rio Branco.</span><br>";
                    break;
                case "AL":
                    echo "Região: <span class='foco'>Nordeste.</span><br>";
                    echo "Estado: <span class='foco'>Alagoas.</span><br>";
                    echo "Capital: <span class='foco'>Maceió.</span><br>";
                    break;
                case "AP":
                    echo "Região: <span class='foco'>Norte.</span><br>";
                    echo "Estado: <span class='foco'>Amapá.</span><br>";
                    echo "Capital: <span class='foco'>Macapá.</span><br>";
                    break;    
                case "PR":
                    echo "Região: <span class='foco'>Sul.</span><br>";
                    echo "Estado: <span class='foco'>Paraná.</span><br>";
                    echo "Capital: <span class='foco'>Curitiba.</span><br>";
                    break;
                default:
                    echo "Estado inválido!";
                    break;
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>

