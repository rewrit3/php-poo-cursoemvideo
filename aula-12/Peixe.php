<?php

require_once 'Animal.php';

class Peixe extends Animal
{
  // Attributes
  private $corEscama;

  // Methods
  public function locomover()
  {
    echo '<p>Nadando!</p>';
  }

  public function alimentar()
  {
    echo '<p>Comendo substâncias!</p>';
  }

  public function emitirSom()
  {
    echo '<p>Peixe não tem som!</p>';
  }

  public function soltarBolha()
  {
    echo '<p>Soltou uma bolha.</p>';
  }

  // Special Methods
  function getCorEscama()
  {
    return $this->corEscama;
  }

  function setCorEscama($corEscama)
  {
    $this->corEscama = $corEscama;
  }
}