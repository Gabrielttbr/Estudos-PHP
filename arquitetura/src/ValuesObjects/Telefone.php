<?php

namespace Gabriel\Arquitetura\ValuesObjects;

class Telefone
{
    private string $DDD;
    private string $numero;


    public function __construct(string $DDD, string $numero)
    {
        $this->DDD = $DDD;
        $this->numero = $numero;
    }


}