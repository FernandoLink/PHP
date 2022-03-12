<?php
require_once 'Aluno.php';
class Bolsista extends Aluno
{
    private $bolsa;

    public function renovarBolsa()
    {
        echo "<p>Bolsa renovada.</p>";
    }
    // Método sobreescrito
    public function pagarMensalidade()
    {
        echo "<p>Pagando mensalidade do bolsita <strong>$this->nome</strong>.</p>";
    }
    public function getBolsa()
    {
        return $this->bolsa;
    }
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }
}
