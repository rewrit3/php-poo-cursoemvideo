<?php

class Televisao {
  // Attributes
  var $marca;
  var $modelo;
  var $cor;
  var $estado;
  var $ligada;

  // Methods
  function estaLigada() {
    if ($this->ligada == true) {
      echo 'A TV está ligada.';
    } else if ($this->ligada == false) {
      echo 'A TV está desligada.';
    }
  }

  function ligar() {
    $this->ligada = true;
  }

  function desligar() {
    $this->ligada = false;
  }
}