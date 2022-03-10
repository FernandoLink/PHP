<?php
require_once 'Lutador.php';
class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($desafiado, $desafiante)
    {   
        if (($desafiado->getCategoria() == $desafiante->getCategoria())
        && ($desafiado != $desafiante)){
            $this->setAprovada(true);
            $this->setDesafiado($desafiado);
            $this->setDesafiante($desafiante);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    public function lutar()
    {
        if($this->getAprovada()){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = 1;
            switch ($vencedor) {
                case 0: // Empate
                    echo "Empatou!";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: // Ganhou Desafiado
                    echo $this->desafiado->getNome();
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: // Ganho Desafiante
                    echo $this->desafiante->getNome();
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }

        } else {
            echo "Luta não pode acontecer.";
        }
    }
    public function __construct()
    {
    }
    private function getDesafiado()
    {
        return $this->desafiado;
    }
    private function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }
    private function getDesafiante()
    {
        return $this->desafiante;
    }
    private function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }
    private function getRounds()
    {
        return $this->rounds;
    }
    private function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }
    private function getAprovada()
    {
        return $this->aprovada;
    }
    private function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }
}
