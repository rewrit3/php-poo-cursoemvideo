<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa
{
  // Attributes
  private $matricula;
  private $curso;

  // Methods
  public function cancelarMatricula()
  {
    echo '<p>Matricula será cancelada!</p>';
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