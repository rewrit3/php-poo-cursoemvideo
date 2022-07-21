<?php

class Pessoa
{
  // Atributtes
  private $nome;
  private $idade;
  private $sexo;

  // Special Methods
  public function __construct($no, $id, $se)
  {
    $this->nome   = $no;
    $this->idade  = $id;
    $this->sexo   = $se;
  }

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

  // Methods
  function fazerAniversario()
  {
    $this->idade ++;
  }
}