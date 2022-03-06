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
            <table border="1"><tr>
            <?php
            $n = range(5,20,5);
            foreach($n as $v) {
                echo "<td>$v ";
            }
            ?>
            </tr></table>
        </pre>
    </div>
</body>

</html>