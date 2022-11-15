<?php

    namespace Gabriel\Banco\Modelo\Conta;

    abstract class Conta
    {
        private string $name;
        private float $saldo;

        public function getName()
        {
            return $this->name;
        }
        public function setName($name)
        {
            $this->name = $name;
        }

        public function getSaldo()
        {
            return $this->saldo;
        }
        public function setSaldo($saldo)
        {
            $this->saldo = $saldo;
        }

        public function __construct(string $name, float $saldo)
        {
                $this->name = $name;
                $this->saldo = $saldo;
        }

        public function sacar(float $valor)
        {
            if($valor > $this->getSaldo())
            {
                echo "Você não possui esse valor.".PHP_EOL;
                return ;
            }
            $this->setSaldo($this->getSaldo() - $valor);
        }

        public function depositar(float $valor)
        {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "Valor atual: ".$this->getSaldo().PHP_EOL;
        }
    }