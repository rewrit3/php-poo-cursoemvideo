<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP (POO) @ Curso em Vídeo </title>
</head>
<body>
  <h1>Polimorfismo</h1>
  <pre>
    <?php
      require_once 'Mamifero.php';
      require_once 'Lobo.php';
      require_once 'Cachorro.php';

      $c = new Cachorro();
      $c->reagirFrase('Toma comida');
      echo '<hr>';
      $c->reagirHoraMin(11, 45);
      $c->reagirHoraMin(21, 00);
      echo '<hr>';
      $c->reagirDono(true);
      $c->reagirDono(false);
      echo '<hr>';
      $c->reagirIdadePeso(2, 12.5);
      $c->reagirIdadePeso(17, 4.5);
    ?>
  </pre>
</body>
</html>