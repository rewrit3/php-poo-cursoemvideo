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
      $a = new Ave();
      $r = new Reptil();
      $c = new Canguru();
      $k = new Cachorro();
      $t = new Tartaruga();

      $m->setPeso(33.5);

      $m->locomover();
      $c->locomover();
      $k->locomover();
      $t->locomover();

      echo '<hr>';

      $m->emitirSom();
      $c->emitirSom();
      $k->emitirSom();
      $t->emitirSom();
    ?>
  </pre>
</body>
</html>