<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>printf</title>
</head>

<body>
    <div>
        <?php
        $pd = "leite";
        $pr = 4.5;
        /* %d - valor decimal (positivo ou negativo)
           %u - valor decimal sem sinal 
           %f - valor real
           %s - string */
        printf("O %s custa R$ %.2f.", $pd, $pr);
        ?>
    </div>
</body>

</html>