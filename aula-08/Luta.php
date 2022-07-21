<?php

require_once 'Lutador.php';

class Luta
{
  // Atributtes
  private $desafiante;
  private $desafiado;
  private $rounds;
  private $aprovada;

  // Public Methods
  public function marcarLuta($l1, $l2)
  {
    if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
      $this->aprovada   = true;
      $this->desafiante = $l1;
      $this->desafiado  = $l2;
    } else {
      $this->aprovada   = false;
      $this->desafiante = null;
      $this->desafiante = null;
    }
  }

  public function lutar()
  {
    if ($this->aprovada) {
      $this->desafiante->apresentar();
      $this->desafiado->apresentar();

      $vencedor = rand(0, 2);

      switch ($vencedor) {
        // Empate
        case 0:
          echo '<hr>';
          echo '<hr>';
          echo '<hr>';
          echo '<p>Empatou!</p>';

          $this->desafiante->empatarLuta();
          $this->desafiado->empatarLuta();
          break;

        // Ganhou Desafiante
        case 1:
          echo '<hr>';
          echo '<hr>';
          echo '<hr>';
          echo '<p>' . $this->desafiante->getNome() . ' venceu!</p>';

          $this->desafiante->ganharLuta();
          $this->desafiado->perderLuta();
          break;

        // Ganhou Desafiado
        case 2:
          echo '<hr>';
          echo '<hr>';
          echo '<hr>';
          echo '<p>' . $this->desafiado->getNome() . ' venceu!</p>';

          $this->desafiante->perderLuta();
          $this->desafiado->ganharLuta();
          break;
      }
    } else {
      echo '<p>Luta não pode acontecer!</p>';
    }
  }

  // Special Methods
  function getDesafiante()
  {
    return $this->desafiante;
  }

  function getDesafiado()
  {
    return $this->desafiado;
  }

  function getRounds()
  {
    return $this->rounds;
  }

  function getAprovada()
  {
    return $this->aprovada;
  }

  function setDesafiante($desafiante)
  {
    $this->desafiante = $desafiante;
  }

  function setDesafiado($desafiado)
  {
    $this->desafiado = $desafiado;
  }

  function setRounds($rounds)
  {
    $this->rounds = $rounds;
  }

  function setAprovada($aprovada)
  {
    $this->aprovada = $aprovada;
  }
}
