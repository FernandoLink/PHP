<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes()
    {
        echo "<hr>Livro ".$this->getTitulo()." escrito por ".$this->getAutor().".";
        echo "<br>Páginas: ".$this->getTotPaginas()." atual ".$this->getPagAtual().".";
        echo "<br> Sendo lido por ".$this->leitor->getNome().".";
    }
    function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setLeitor($leitor);
    }
    function getTitulo()
    {
        return $this->titulo;
    }
    function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    function getAutor()
    {
        return $this->autor;
    }
    function setAutor($autor)
    {
        $this->autor = $autor;
    }
    function getTotPaginas()
    {
        return $this->totPaginas;
    }
    function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }
    function getPagAtual()
    {
        return $this->pagAtual;
    }
    function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }
    function getAberto()
    {
        return $this->aberto;
    }
    function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }
    function getLeitor()
    {
        return $this->leitor;
    }
    function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }
    public function abrir()
    {
        $this->setAberto(true);
    }
    public function fechar()
    {
        $this->setAberto(false);
    }
    public function folhear($pagina)
    {
        if ($pagina) {
            $this->pagAtual = $pagina;
        } else {
            $this->pagAtual = 0;
        }
    }
    public function avancarPag()
    {
        $this->pagAtual++;
    }
    public function voltarPag()
    {
        $this->pagAtual--;
    }
}
