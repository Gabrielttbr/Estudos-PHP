<?php
    namespace Gabriel\Banco\Modelo\Conta;

    use Gabriel\Banco\Modelo\Conta\Conta;


    class Salario extends Conta
    {
        public function __construct(string $name, float $saldo)
        {
            parent::__construct($name, $saldo);
        }
    }