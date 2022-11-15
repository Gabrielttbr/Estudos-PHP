<?php
    namespace Gabriel\Banco\Modelo\Conta;

    use Gabriel\Banco\Modelo\Conta\Conta;
    use Gabriel\Banco\Modelo\Conta\TaxaConta;

    class Corrente extends Conta implements TaxaConta
    {
        public function __construct($nome, $saldo){
            parent::__construct($nome, $saldo);
        }

        public function taxar($taxa)
        {
            $this->setSaldo($this->getSaldo() - ($this->getSaldo() * 0.02) );
        }
    }