<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP (POO) @ Curso em Vídeo </title>
</head>
<body>
  <pre>
    <?php
      require_once 'ContaBanco.php';

      $p1 = new ContaBanco(); // Jubileu
      $p1->abrirConta('CC');
      $p1->setNumConta(1000);
      $p1->setDono('Jubileu');
      $p1->depositar(300);
      $p1->pagarMensal();
      $p1->sacar(338);
      $p1->fecharConta();
      print_r($p1);

      echo '<hr>';

      $p2 = new ContaBanco(); // Creuza
      $p2->abrirConta('CP');
      $p2->setNumConta(2000);
      $p2->setDono('Creuza');
      $p2->depositar(500);
      $p2->sacar(1000);
      $p2->pagarMensal();
      $p2->sacar(630);
      $p2->fecharConta();
      print_r($p2);
    ?>
  </pre>
</body>
</html>