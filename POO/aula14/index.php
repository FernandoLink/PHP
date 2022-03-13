<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliformismo (sobrecarga)</title>
</head>

<body>
    <h1>Polimorfismo (sobrecarga)</h1>
    <pre>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML");

            $g[0] = new Gafanhoto("Fernando Link", 51, "M", "link");
            $g[1] = new Gafanhoto("Valéria Cristina Souza Link", 46, "F", "val");


            print_r($v[0]);
            print_r($v[1]);
            print_r($v[2]);
            print_r($g[0]);
            print_r($g[1]);
        ?>
    </pre>
</body>

</html>