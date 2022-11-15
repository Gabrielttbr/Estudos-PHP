<?php
    require_once  'autoload.php';
    use \Conta\Pessoa;
    class Cliente extends Pessoa
    {
        private string $agencia;
        private float $saldo;

        public function __construct($saldo, $agencia)
        {
            $this->setSaldo($saldo);
            $this->setAgencia($agencia);
        }

        public function getAgencia(): string
        {
            return $this->agencia;
        }
        public function setAgencia(string $agencia): void
        {
            $this->agencia = $agencia;
        }

        public function setSaldo(float $saldo): void
        {
            $this->saldo = $saldo;
        }
        public function getSaldo(): float
        {
            return $this->saldo;
        }
    }
    $novoCliente = new Cliente(10.000, 'Bradesco');
    var_dump($novoCliente);