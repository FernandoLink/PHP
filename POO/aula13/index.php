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
        require_once 'Mamifero.php';
        require_once 'Cachorro.php';
        require_once 'Lobo.php';

        $m = new Mamifero();
        $c = new Cachorro();

        $c->reagirFrase("Vai apanhar");
        $c->reagirHora(11, 45);
        $c->reagirDono(false);
        $c->reagirIdade(3, 14.5);

        ?>
    </pre>
</body>

</html>