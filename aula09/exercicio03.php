<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Situação Escolar do Aluno</title>
</head>
<body>
    <div>  
        <?php
            $n1 = isset($_GET["nota1"]) ? $_GET["nota1"]:0;
            $n2 = isset($_GET["nota2"]) ? $_GET["nota2"]:0;
            $m = ($n1 + $n2) / 2;
            if ($m < 5) {
                $s = "REPROVADO.";
            }
            elseif ($m >= 5 && $m < 7) {
                $s = "RECUPERAÇÃO.";
            } else {
                $s = "APROVADO.";
            }
            echo "A média entre ".number_format($n1,1)." e ".number_format($n2,1)." é igual a ".number_format($m,1).".<br>";
            echo "Situação do aluno <strong>$s.</strong>"
        ?>
        <a href="exercicio03.html"><br/>Voltar</a>
    </div>
</body>
</html>

