<?php

namespace Gabriel\Arquitetura\ValuesObjects;

class Email
{
    private string $endereco;

    public function __construct(string $endereco)
    {
        if(filter_var($endereco, FILTER_VALIDATE_EMAIL) === false)
        {
            throw  new \InvalidArgumentException
            (
                'Endereço de e-mail inválido.'
            );
        }
    }

    public function __toString()
    {
        return $this->endereco;
    }
}