<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa
{
  // Attributes
  private $setor;
  private $trabalhando;

  // Methods
  public function mudarTrabalho()
  {
    $this->trabalhando = ! $this->trabalhando;
  }

  // Special Methods
  public function getSetor()
  {
    return $this->setor;
  }

  public function getTrabalhando()
  {
    return $this->trabalhando;
  }

  public function setSetor($setor)
  {
    $this->setor = $setor;
  }

  public function setTrabalhando($trabalhando)
  {
    $this->trabalhando = $trabalhando;
  }
}