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
      require_once 'Caneta.php';

      $c1 = new Caneta;

      $c1->modelo = 'BIC Cristal';
      $c1->cor    = 'Azul';
      // $c1->ponta  = 0.5;
      // $c1->carga  = 99;
      // $c1->tampada  = true;

      $c1->rabiscar();
      $c1->destampar();
      $c1->tampar();

      print_r($c1);
    ?>
  </pre>
</body>
</html>