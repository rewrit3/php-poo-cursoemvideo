<?php

require_once 'Pessoa.php';

class Professor extends Pessoa
{
  // Attributes
  private $especialidade;
  private $salario;

  // Methods
  public function receberAumento($aum)
  {
    $this->salario += $aum;
  }

  // Special Methods
  public function getEspecialidade()
  {
    return $this->especialidade;
  }

  public function getSalario()
  {
    return $this->salario;
  }

  public function setEspecialidade($especialidade)
  {
    $this->especialidade = $especialidade;
  }

  public function setSalario($salario)
  {
    $this->salario = $salario;
  }
}