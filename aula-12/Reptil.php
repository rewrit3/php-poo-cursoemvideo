<?php

require_once 'Animal.php';

class Reptil extends Animal
{
  // Attributes
  private $corEscama;

  // Methods
  public function locomover()
  {
    echo '<p>Rastejando!</p>';
  }

  public function alimentar()
  {
    echo '<p>Comendo vegetais!</p>';
  }

  public function emitirSom()
  {
    echo '<p>Som de Réptil!</p>';
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