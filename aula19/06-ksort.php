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
            $v = array(3=>"C", 1=>"E", 0=>"H", 2=>"B");
            print_r($v);
            ksort($v);
            print_r($v);
            krsort($v);
            print_r($v);
            ?>
        </pre>
    </div>
</body>

</html>