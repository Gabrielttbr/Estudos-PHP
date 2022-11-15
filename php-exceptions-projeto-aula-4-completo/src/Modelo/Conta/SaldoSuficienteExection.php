<?php

namespace Alura\Banco\Modelo\Conta;

class SaldoSuficienteExection extends \DomainException
{

    public function __construct(float $valorAsacar)
    {

    }
}