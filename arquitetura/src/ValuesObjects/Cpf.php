<?php

namespace Gabriel\Arquitetura\ValuesObjects;

class Cpf
{
    private string $CPF;


    public function __construct(string $cpf)
    {
        $this->setCPF($cpf);
    }


    public function getCPF()
    {
        return $this->CPF;
    }
    public function setCPF($CPF)
    {
        $opcoes = [
            'options' => [
                'regexp' => '/\d{3}\.\d{3}\-\d{2}/'
            ]
        ];
        if(filter_var($CPF, FILTER_VALIDATE_REGEXP, $opcoes) === false) {
            throw new \InvalidArgumentException("CPF no formato inválido");
        }
        $this->CPF = $CPF;
    }


}