<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceito de Herança em PHP POO</title>
</head>
<body>
    <h1>Herança de Classes</h1>

    <pre>
        <?php
            require_once "class/Pessoa.php";
            require_once "class/Aluno.php";
            require_once "class/Professor.php";
            require_once "class/Funcionario.php";

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Beatriz");
            $p2->setNome("Jonas");
            $p3->setNome("Marcos");
            $p4->setNome("Julía");

            $p1->setSexo("F");
            $p2->setSexo("M");
            $p3->setSexo("M");
            $p4->setSexo("F");

            $p1->setIdade(16);
            $p2->setIdade(17);
            $p3->setIdade(50);
            $p4->setIdade(25);

            $p2->setCurso("Informática");
            $p3->setSalario(2500.75);
            $p4->getTrabalhando("Administração");

            $p3->receberAumento(500);
            $p4->mudarTrabalho();
            $p2->cancelarMatr();

            $p2->setMatricula(102030);
            $p3->setEspecialidade("Tecnológia");
            $p4->setSetor("Administração");

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
    </pre>
</body>
</html>