<?php

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa
{
  // Atributtes
  private $login;
  private $totalAssistido;

  // Special Methods
  public function __construct($nome, $idade, $sexo, $login)
  {
    parent::__construct($nome, $idade, $sexo);

    $this->login          = $login;
    $this->totalAssistido = 0;
  }

  function getLogin()
  {
    return $this->login;
  }

  function getTotalAssistido()
  {
    return $this->totalAssistido;
  }

  function setLogin($login)
  {
    $this->login = $login;
  }

  function setTotalAssistido($totalAssistido)
  {
    $this->totalAssistido = $totalAssistido;
  }

  // Methods
  private function assistirMaisUm()
  {
    $this->totalAssistido ++;
  }
}