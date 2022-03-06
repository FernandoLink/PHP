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
        <pre>
            <?php
            $v = array("A", "J", "K", "M");
            $v[] = "F";
            array_push($v, "O");
            var_dump($v);
            array_pop($v);
            var_dump($v);
            ?>
        </pre>
    </div>
</body>

</html>