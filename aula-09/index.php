<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP (POO) @ Curso em Vídeo </title>
</head>
<body>
  <h1>Exercícios</h1>
  <pre>
    <?php
      require_once 'Pessoa.php';
      require_once 'Livro.php';

      $p = array();
      $l = array();

      $p[0] = new Pessoa('Adolfo', 32, 'Masculino');

      $l[0] = new Livro('Duna', 'Frank Herbert', 'Adolfo', 300, 1, true);
      $l[0]->abrir();
      $l[0]->folhear(10);
      $l[0]->detalhes();
    ?>
  </pre>
</body>
</html>