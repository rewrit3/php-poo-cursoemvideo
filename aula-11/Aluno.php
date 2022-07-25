<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa
{
  // Attributes
  private $matricula;
  private $curso;

  // Methods
  public function pagarMensalidade()
  {
    echo '<p>Pagando mensalidade do Aluno: ' . $this->nome . '</p>';
  }

  // Special Methods
  public function getMatricula()
  {
    return $this->matricula;
  }

  public function getCurso()
  {
    return $this->curso;
  }

  public function setMatricula($matricula)
  {
    $this->matricula = $matricula;
  }

  public function setCurso($curso)
  {
    $this->curso = $curso;
  }
}