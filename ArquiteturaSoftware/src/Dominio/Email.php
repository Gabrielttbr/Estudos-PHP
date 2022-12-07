<?php

namespace Gabriel\Arquitetura\Dominio;

use http\Exception\InvalidArgumentException;

class Email
{
    private string $endereco;

    public function __construct(string $endereco)
    {
        if(filter_var($endereco, FILTER_VALIDATE_EMAIL) === false ){
            throw new InvalidArgumentException('Endereco inválido');
        }
        $this->endereco = $endereco;
    }

        public function __toString()
        {
            return $this->endereco;
        }

}