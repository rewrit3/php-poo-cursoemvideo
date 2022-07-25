<?php

require_once 'Aluno.php';

class Bolsista extends Aluno
{
  // Attributes
  private $bolsa;

  // Methods
  public function renovarBolsa()
  {
    echo "<p>Bolsa renovada!</p>";
  }

  public function pagarMensalidade()
  {
    echo "<p>$this->nome é bolsista! Então paga com desconto.</p>";
  }

  // Special Methods
  public function getBolsa()
  {
    return $this->bolsa;
  }

  public function setBolsa($bolsa)
  {
    $this->bolsa = $bolsa;
  }
}