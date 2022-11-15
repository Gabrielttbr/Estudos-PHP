<?php

namespace Alura\Banco\Modelo;

use Exception;

class NomeInvalidoExection extends Exception
{
    private $nome;


    public function __construct($nome)
    {
        if(strlen($nome) < 5)
        {
            throw new Exception('Nome invalido');
        }
    }


}