<?php
    namespace Gabriel\Banco\Modelo\Conta;

    use Gabriel\Banco\Modelo\Conta\Conta;
    use Gabriel\Banco\Modelo\Conta\TaxaConta;

    class Poupanca extends Conta implements TaxaConta
    {
        public function __construct(string $name, float $saldo)
        {
            parent::__construct($name, $saldo);
        }

        public function taxar($taxa)
        {
            $this->setSaldo($this->getSaldo() - ($this->getSaldo() * 0.05) );
        }
    }