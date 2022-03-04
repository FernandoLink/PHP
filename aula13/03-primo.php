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
        $n = $_GET["num"]?$_GET["num"]:1;
        echo "<h1>Analisando o número $n ...</h1>";
        $t = 0;
        echo "Valores múltiplos: ";
        for($c=1;$c<=$n;$c++) {
            if(($n%$c) == 0) {
                echo " $c";
                $t++;
            }
        }
        echo "<br/>";
        echo "Total de múltiplos: $t<br/>";
        if ($t > 2) {
            echo "Resultado: $n <span class='foco'>NÃO É PRIMO</span><br/>";
        } else {
            echo "Resultado: $n <span class='foco'>É PRIMO</span><br/>";
        }
        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>