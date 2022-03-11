<?php

class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso, $categoria;
    private $vitorias, $derrotas, $empates;

    public function apresentar()
    {
        echo "<p>Lutador: ".$this->getNome().".</p>";
        echo "<p>Origem: ".$this->getNacionalidade().".</p>";
        echo "<p>".$this->getIdade()." anos.</p>";
        echo "<p>".$this->getAltura()."m de altura.</p>";
        echo "<p>Pesando ".$this->getPeso()."Kg.</p>";
        echo "<p>Ganhou: ".$this->getVitorias().".</p>";
        echo "<p>Perdeu: ".$this->getDerrotas().".</p>";
        echo "<p>Empatou: ".$this->getEmpates().".</p>";
    }
    public function status()
    {
        echo "<p>".$this->getNome().".</p>";
        echo "é um peso ".$this->getCategoria();
        echo "<p>".$this->getVitorias()." vitórias.</p>";
        echo "<p>".$this->getDerrotas()." derrotas.</p>";
        echo "<p>".$this->getEmpates()." empates.</p>";

    }
    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }
    public function getNome()
    {
        return $this->nome;
    }
    private function setNome($no)
    {
        $this->nome = $no;
    }
    private function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    private function setNacionalidade($na)
    {
        $this->nacionalidade = $na;
    }
    private function getIdade()
    {
        return $this->idade;
    }
    private function setIdade($id)
    {
        $this->idade = $id;
    }
    private function getAltura()
    {
        return $this->altura;
    }
    private function setAltura($al)
    {
        $this->altura = $al;
    }
    private function getPeso()
    {
        return $this->peso;
    }
    private function setPeso($pe)
    {
        $this->peso = $pe;
        $this->setCategoria();
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    private function setCategoria()
    {
        if ($this->getPeso() < 52.2) {
            echo "Inválido.";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            echo "Inválido.";
        }
    }
    private function getVitorias()
    {
        return $this->vitorias;
    }
    private function setVitorias($vi)
    {
        $this->vitorias = $vi;
    }
    private function getDerrotas()
    {
        return $this->derrotas;
    }
    private function setDerrotas($de)
    {
        $this->derrotas = $de;
    }
    private function getEmpates()
    {
        return $this->empates;
    }
    private function setEmpates($em)
    {
        $this->empates = $em;
    }
}
?>
