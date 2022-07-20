<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP (POO) @ Curso em Vídeo </title>
</head>
<body>
  <h1>UEC</h1>
  <pre>
    <?php
      require_once 'Lutador.php';

      $l = new Lutador(
        'Pretty Boy',
        'França',
        30,
        1.75,
        68.9,
        11,
        2,
        1
      );

      $l->status();
      $l->apresentar();
    ?>
  </pre>
</body>
</html>