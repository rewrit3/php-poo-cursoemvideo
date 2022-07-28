<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao
{
  // Attributes
  private $espectador;
  private $filme;

  // Special Methods
  public function __construct($espectador, $filme)
  {
    $this->espectador = $espectador;
    $this->filme      = $filme;
    $this->filme->setViews($this->filme->getViews() + 1);
    $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
  }

  function getEspectador()
  {
    return $this->espectador;
  }

  function getFilme()
  {
    return $this->filme;
  }

  function setEspectador($espectador)
  {
    $this->espectador = $espectador;
  }

  function setFilme($filme)
  {
    $this->filme = $filme;
  }

  // Methods
  public function avaliar()
  {
    $this->filme->setAvaliacao(5);
  }

  public function avaliarNota($nota)
  {
    $this->filme->setAvaliacao($nota);
  }

  public function avaliarPorcentagem($porcentagem)
  {
    $nova = 0;

    if ($porcentagem <= 20) {
      $nova = 3;
    } else if ($porcentagem <= 50) {
      $nova = 5;
    } else if ($porcentagem <= 90) {
      $nova = 8;
    } else {
      $nova = 10;
    }

    $this->filme->setAvaliacao($nova);
  }
}