<?php

namespace Gabriel\Arquitetura\Dominio;

use Exception;

class Cpf
{
    private string $numeroDoCpf;

    public function __construct(string $numeroDoCpf)
    {
        $this->setNumeroDoCpf($numeroDoCpf);
    }

    public function getNumeroDoCpf(): string
    {
        return $this->numeroDoCpf;
    }

    private function setNumeroDoCpf(string $numeroDoCpf): void
    {
       $opcoes = [
           'options' => [
                'regexp' => '/\d{3}.\d{3}\.\d{3}-\d{2}/'
           ]
       ];
        if(filter_var($numeroDoCpf, FILTER_VALIDATE_REGEXP, $opcoes) === false){
            throw new \Exception('CPF no formato inválido'.PHP_EOL);
        }
        $this->numeroDoCpf = $numeroDoCpf;
    }

}