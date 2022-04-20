<?php

    require_once 'Visitante.php';
    require_once 'Aluno.php';
    require_once 'Bolsista.php';
    require_once 'Professor.php';
    require_once 'Tecnico.php';

    $v1 = new Visitante();
    $v1->Setnome("Diego");
    $v1->setIdade(20);
    $v1->setSexo("Masculino");

    echo "Nome Visitante: " . $v1->getNome() . "<br>";
    echo "Idade Visitante: " . $v1->getIdade() . "<br>";
    echo "Sexo Visitante: " . $v1->getSexo() . "<br>";

    $aluno1 = new Aluno();
    $aluno1->setNome("Pedro");
    $aluno1->setIdade(17);
    $aluno1->setSexo("Masculino");
    $aluno1->setCurso("Informática");
   

    echo "<br>";

    echo "Nome Aluno: " . $aluno1->getNome() . "<br>";
    echo "Idade Aluno: " . $aluno1->getIdade() . "<br>";
    echo "Sexo Aluno: " . $aluno1->getSexo() . "<br>";
    echo "Curso: " . $aluno1->getCurso() . "<br>";
    $aluno1->pagarMensalidade();

    $b1 = new Bolsista();
    $b1->setNome("Jhonatan Joestar");
    $b1->setBolsa(12.5);
    $b1->setCurso("ADM");
    $b1->setIdade(16);
    $b1->pagarMensalidade();

    print_r($b1);

    echo "<br>";

    $prof1 = new Professor();
    $prof1->setNome("Lando");
    $prof1->setIdade(34);
    $prof1->setSexo("Masculino");
    $prof1->setEspecialidade("Desenvovedor Web");
    $prof1->setSalario(8000);

    echo "<br>";

    echo "Nome Professor: " . $prof1->getNome() . "<br>";
    echo "Idade Professor: " . $prof1->getIdade() . "<br>";
    echo "Sexo Professor: " . $prof1->getSexo() . "<br>";
    echo "Especialidade: " . $prof1->getEspecialidade() . "<br>";
    $prof1->receberAumento();

    echo "<br>";

    $tecnico1 = new Tecnico();
    $tecnico1->setNome("João");
    $tecnico1->setIdade(22);
    $tecnico1->setSexo("Masculino");
    $tecnico1->setRegistroProfissional(660);

    echo "Nome Ténico: " . $tecnico1->getNome() . "<br>";
    echo "Idade Ténico: " . $tecnico1->getIdade() . "<br>";
    echo "Sexo Ténico: " . $tecnico1->getSexo() . "<br>";
    $tecnico1->praticar();

?>