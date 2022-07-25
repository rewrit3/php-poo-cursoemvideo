<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP (POO) @ Curso em Vídeo </title>
</head>
<body>
  <h1>Herança</h1>
  <pre>
    <?php
      require_once 'Pessoa.php';
      require_once 'Aluno.php';
      require_once 'Professor.php';
      require_once 'Funcionario.php';

      $p1 = new Pessoa();
      $p2 = new Aluno();
      $p3 = new Professor();
      $p4 = new Funcionario();

      $p1->setNome('Pedro');
      $p2->setNome('João');
      $p3->setNome('Maria');
      $p4->setNome('Lucas');

      $p2->setCurso('Informática');
      $p3->setSalario(2500);
      $p4->setSetor('Estoque');

      $p3->receberAumento(550);
      $p4->mudarTrabalho();
      $p2->cancelarMatricula();

      print_r($p1);
      print_r($p2);
      print_r($p3);
      print_r($p4);
    ?>
  </pre>
</body>
</html>