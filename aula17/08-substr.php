<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>substr</title>
</head>

<body>
    <div>
        <?php
        $site = "Curso em Video";
        $sub = substr($site, 0, 5);
        echo "<p>$sub.</p>";
        $sub = substr($site, 6);
        echo "<p>$sub.</p>";
        $sub = substr($site, -5, 2);
        echo "<p>$sub.</p>";
        ?>
    </div>
</body>

</html>