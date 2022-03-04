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
        <form method="get" action="03-tabuada2.php">
            Número: 
            <?php
                $c = 1;
                echo "<select name='num'>";
                while ($c <= 10) {
                    echo "<option value='$c'>$c</option>";
                    $c++;
                }
            ?>
            <input type="submit" value="Tabuada" class="botao"/>
        </form>
    </div>
</body>
</html>

