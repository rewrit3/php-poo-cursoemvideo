<?php

require_once 'Animal.php';

class Ave extends Animal
{
  // Attributes
  private $corPena;

  // Methods
  public function locomover()
  {
    echo '<p>Voando!</p>';
  }

  public function alimentar()
  {
    echo '<p>Comendo frutas!</p>';
  }

  public function emitirSom()
  {
    echo '<p>Som de ave!</p>';
  }

  public function fazerNinho()
  {
    echo '<p>Construindo um ninho.</p>';
  }

  // Special Methods
  function getCorPena()
  {
    return $this->corPena;
  }

  function setCorPena($corPena)
  {
    $this->corPena = $corPena;
  }
}