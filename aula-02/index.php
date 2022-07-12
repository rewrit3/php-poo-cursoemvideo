<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP (POO) @ Curso em Vídeo </title>
</head>
<body>
  <?php
    /*
    require_once 'Caneta.php';

    $c1 = new Caneta;
    $c1->cor      = 'Azul';
    $c1->ponta    = 0.5;
    $c1->tampada  = false;
    $c1->tampar();
    print_r($c1);

    echo '<br><br>';

    $c2 = new Caneta;
    $c2->cor    = 'Verde';
    $c2->carga  = 50;
    $c2->tampar();
    print_r($c2);
    */

    require_once 'Televisao.php';

    $c1 = new Televisao;
    $c1->marca    = 'Sony';
    $c1->modelo   = 'KLV';
    $c1->cor      = 'Preto';
    $c1->estado   = 'Usada';
    $c1->ligada   = false;
    $c1->ligar();
    $c1->estaLigada();
    // print_r($c1);
  ?>
</body>
</html>