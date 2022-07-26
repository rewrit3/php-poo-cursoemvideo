<?php

abstract class Animal
{
  // Attributes
  protected $peso;
  protected $idade;
  protected $membros;

  // Methods
  abstract function locomover();
  abstract function alimentar();
  abstract function emitirSom();

  // Special Methods
  function getPeso()
  {
    return $this->peso;
  }

  function setPeso($peso)
  {
    $this->peso = $peso;
  }

  function getIdade()
  {
    return $this->idade;
  }

  function setIdade($idade)
  {
    $this->idade = $idade;
  }

  function getMembros()
  {
    return $this->membros;
  }

  function setMembros($membros)
  {
    $this->membros = $membros;
  }
}