<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>print_r</title>
</head>

<body>
    <div>
        <?php
        $x[0] = 4;
        $x[1] = 8;
        $x[2] = 3;
        print_r($x);
        echo "<br />";
        $v2 = array(3, 7, 6, 2, 1, 9);
        echo "<br />";
        print_r($v2);
        echo "<br />";
        var_dump($v2);
        echo "<br />";
        var_export($v2);
        ?>
    </div>
</body>

</html>