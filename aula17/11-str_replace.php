<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>str_replace</title>
</head>

<body>
    <div>
        <?php
        $frase = "Gosto de estudar Matemática!!!";
        $novaFrase = str_replace("Matemática", "PHP", $frase);
        echo "<p>$frase</p>";
        echo "<p>$novaFrase</p>";
        ?>
    </div>
</body>

</html>