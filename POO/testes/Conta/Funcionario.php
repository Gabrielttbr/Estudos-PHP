<?php

namespace \Conta\Funcionario;

use \conta\Pessoa;
class Funcionario extends \Conta\Pessoa\Pessoa{
    private string $ra;
    private string $cargo;

    public function __construct($cpf, $cargo, $ra)
    {
        parent::__construct($cpf);
        $this->setCargo($cargo);
        $this->setRa($ra);
    }

    public function setRa($ra)
    {
        $this->ra = $ra;
    }
    public function getRa(){
        $this->ra;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }
    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }

}