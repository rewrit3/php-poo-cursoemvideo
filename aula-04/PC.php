<?php

class PC {
  // Attributes
  private $modelo;
  private $cor;
  private $ligado;

  // Methods
  public function __construct($modelo, $cor) {
    $this->modelo = $modelo;
    $this->cor    = $cor;
    $this->setLigado(true);
  }

  public function getModelo() {
    return $this->modelo;
  }

  public function setModelo($modelo) {
    $this->modelo = $modelo;
  }

  public function getCor() {
    return $this->modelo;
  }

  public function setCor($cor) {
    $this->cor = $cor;
  }

  public function getLigado() {
    return $this->ligado;
  }

  public function setLigado($ligado) {
    $this->ligado = $ligado;
  }
}