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
      require_once 'Gafanhoto.php';
      require_once 'Video.php';

      $v[0] = new Video('Aula 1 de POO');
      $v[1] = new Video('Aula 12 de POO');
      $v[2] = new Video('Aula 15 de POO');

      $g[0] = new Gafanhoto('Jubileu', 22, 'M', 'juba');
      $g[1] = new Gafanhoto('Creuza', 32, 'M', 'creuzita');

      print_r($g[0]);
      echo '<hr>';
      print_r($g[1]);
    ?>
  </pre>
</body>
</html>