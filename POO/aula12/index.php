<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliformismo (sobreposição)</title>
</head>

<body>
    <h1>Polimorfismo (sobreposição)</h1>
    <pre>
        <?php
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'Goldfish.php';
        require_once 'Arara.php';

        $m = new Mamifero();
        $r = new Reptil();
        $p = new Peixe();
        $a = new Ave();
        $c = new Canguru();
        $k = new Cachorro();
        $t = new Tartaruga();

        $m->setPeso(85.3);
        $m->setIdade(2);
        $m->setMembros(4);
        $m->locomover();
        $m->alimentar();
        $m->emitirSom();

        $p->setPeso(0.35);
        $p->setIdade(1);
        $p->setMembros(0);
        $p->locomover();
        $p->alimentar();
        $p->emitirSom();
        $p->soltarBolha();

        $a->setPeso(0.89);
        $a->setIdade(2);
        $a->setMembros(2);
        $a->locomover();
        $a->alimentar();
        $a->emitirSom();
        $a->fazerNinho();

        $c->setPeso(55.30);
        $c->setIdade(3);
        $c->setMembros(4);
        $c->locomover();
        $c->alimentar();
        $c->emitirSom();
        $c->usarBolsa();

        $k->setPeso(55.30);
        $k->setIdade(3);
        $k->setMembros(4);
        $k->locomover();
        $k->alimentar();
        $k->emitirSom();
        $k->abanarRabo();

        ?>
    </pre>
</body>

</html>