<?php

require_once 'Publicacao.php';

class Livro implements Publicacao
{
  // Atributtes
  private $titulo;
  private $autor;
  private $leitor;
  private $aberto;
  private $totalPaginas;
  private $paginaAtual;

  // Special Methods
  public function __construct(
    $ti,
    $au,
    $le,
    $tp,
    $pa,
    $ab
  ) {
    $this->titulo       = $ti;
    $this->autor        = $au;
    $this->leitor       = $le;
    $this->totalPaginas = $tp;
    $this->paginaAtual  = $pa;
    $this->aberto       = $ab;
  }

  public function getTitulo()
  {
    return $this->titulo;
  }

  public function getAutor()
  {
    return $this->autor;
  }

  public function getLeitor()
  {
    return $this->leitor;
  }

  public function getAberto()
  {
    return $this->aberto;
  }

  public function getTotalPaginas()
  {
    return $this->totalPaginas;
  }

  public function getPaginaAtual()
  {
    return $this->paginaAtual;
  }

  public function setTitulo($titulo)
  {
    $this->titulo = $titulo;
  }

  public function setAutor($autor)
  {
    $this->autor = $autor;
  }

  public function setLeitor($leitor)
  {
    $this->leitor = $leitor;
  }

  public function setAberto($aberto)
  {
    $this->aberto = $aberto;
  }

  public function setTotalPaginas($totalPaginas)
  {
    $this->totalPaginas = $totalPaginas;
  }

  public function setPaginaAtual($paginaAtual)
  {
    $this->paginaAtual = $paginaAtual;
  }

  public function abrir()
  {
    $this->aberto = true;
  }

  public function fechar()
  {
    $this->aberto = false;
  }

  public function folhear($pagina)
  {
    if ($pagina > $this->totalPaginas) {
      $this->paginaAtual = 0;
    } else {
      $this->paginaAtual = $pagina;
    }
  }

  public function avancarPagina()
  {
  }

  public function voltarPagina()
  {
  }

  // Methods
  public function detalhes()
  {
    echo '<p>Livro: ' . $this->titulo . '</p>';
    echo '<p>Autor: ' . $this->autor . '</p>';
    echo '<p>Leitor: ' . $this->leitor . '</p>';
    echo '<p>Páginas: ' . $this->totalPaginas . '</p>';
    echo '<p>Página Atual: ' . $this->paginaAtual . '</p>';
    echo  $this->aberto == true ? 'Aberto: Sim' : 'Aberto: Não';
  }
}
