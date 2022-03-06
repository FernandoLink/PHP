<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Vetores e Matrizes</title>
</head>

<body>
    <div>
        <?php
        $v = array("nome" => "Ana", "idade" => 23, "peso" => 65.5);
        $v["fuma"] = true;
        foreach ($v as $k => $c) {
            echo "<p>O campo $k possui o conteúdo $c.</p>";
        }
        ?>
    </div>
</body>

</html>