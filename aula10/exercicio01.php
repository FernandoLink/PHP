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
            $n = isset($_GET["num"]) ? $_GET["num"]:0;
            $o = isset($_GET["oper"]) ? $_GET["oper"]:1;
            switch ($o) {
                case 1:
                    $r = $n * 2;
                    echo "O dobro de $n é <span class='foco'>$r.</span>";
                    break;
                case 2:
                    $r = $n ^ 3;
                    echo "O cubo de $n é <span class='foco'>$r.</span>";
                    break;
                case 3:
                    $r = sqrt($n); // $n ^ (1/2)
                    echo "A raiz quadrada de $n é <span class='foco'>$r.</span>";
                    break;
            }
        ?>
        <a href="exercicio01.html" class="botao">Voltar</a>
    </div>
</body>
</html>

