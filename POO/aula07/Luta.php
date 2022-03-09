<?php
class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function __construct()
    {
        
    }
    private function getDesafiado(){
        return $this->desafiado;
    }
    private function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }
    private function getDesafiante(){
        return $this->desafiante;
    }
    private function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }
    private function getRounds(){
        return $this->rounds;
    }
    private function setRounds($rounds){
        $this->rounds = $rounds;
    }
    private function getAprovada(){
        return $this->aprovada;
    }
    private function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }
}
