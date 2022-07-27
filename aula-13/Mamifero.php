<?php

require_once 'Animal.php';

class Mamifero extends Animal
{
  // Attributes
  private $corPelo;

  // Methods
  public function emitirSom()
  {
    echo '<p>Som de Mamífero!</p>';
  }

  // Special Methods
  function getCorPelo()
  {
    return $this->corPelo;
  }

  function setCorPelo($corPelo)
  {
    $this->corPelo = $corPelo;
  }
}