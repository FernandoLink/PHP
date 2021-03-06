<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstrato e Final</title>
</head>

<body>
    <h1>Abstrato e Final</h1>
    <pre>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';

            $v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setIdade(31);
            $v1->setSexo("M");

            $a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->setMatricula(1111);
            $a1->setIdade(16);
            $a1->setSexo('M');
            $a1->setCurso('Informática');
            $a1->pagarMensalidade();

            $b1 = new Bolsista();
            $b1->setMatricula(1112);
            $b1->setBolsa(12.5);
            $b1->setCurso("Administração");
            $b1->setNome("Jubileu");
            $b1->pagarMensalidade();

            print_r($v1);
            print_r($a1);
            print_r($b1);
        ?>
    </pre>
</body>

</html>