<?php
/* 
    Classe Abstrata:
    Não pode ser instanciada.
    Só pode servir como progenitora.
*/
abstract class Pessoa 
{
    protected $nome; // protected a própria classe e suas subclasses podem acessar
    protected $idade;
    protected $sexo;

    /* 
        Método Final:
        Não pode ser sobrescrito pelas suas sub-classes.
        Obrigatoriamente herdado.
    */
    public final function fazerAniver()
    {
        $this->idade++;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
}
