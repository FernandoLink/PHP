<?php

class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function ContaBanco()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($this->getTipo() == "CC") {
            $this->saldo = 50;
        } else {
            $this->saldo = 150;
        }
    }
    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "Conta com dinheiro.";
        } elseif ($this->getSaldo() < 0) {
            echo "Conta em débito.";
        } else {
            $this->setStatus(false);
        }
    }
    public function depositar($v)
    {
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $v);
        }
        else {
            echo "Impossível depositar.";
        }
    }
    public function sacar($v)
    {
        if($this->getStatus() == true){
            if($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "Saldo insuficiente.";
            }
        } else {
            echo "Impossível sacar.";
        }
    }
    public function pagarMensal()
    {
        $v = 0;
        if($this->getTipo() == "CC") {
            $v = 12;
        } elseif ($this->getTipo() == "CP") {
            $v = 20;
        }
        if($this->getStatus() == true) {
            if($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo - $v);
            }
            else {
                echo "Saldo Insuficiente.";
            }
        } else {
            echo "Impossível pagar.";
        }
    }

    public function getNumConta()
    {
        return $this->numConta;
    }
    public function setNumConta($n)
    {
        $this->numConta = $n;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($t)
    {
        $this->tipo = $t;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function setDono($d)
    {
        $this->dono = $d;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($s)
    {
        $this->saldo = $s;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($s)
    {
        $this->status = $s;
    }
}
