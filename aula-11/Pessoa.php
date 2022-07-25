<?php

abstract class Pessoa
{
  // Attributes
  protected $nome;
  protected $idade;
  protected $sexo;

  // Methods
  public final function fazerAniversario()
  {
    $this->idade ++;
  }

  // Special Methods
  public function getNome()
  {
    return $this->nome;
  }

  public function getIdade()
  {
    return $this->idade;
  }

  public function getSexo()
  {
    return $this->sexo;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function setIdade($idade)
  {
    $this->idade = $idade;
  }

  public function setSexo($sexo)
  {
    $this->sexo = $sexo;
  }
}