<?php

namespace Gabriel\Arquitetura\Dominio;

class Telefone
{
    private string $ddd;
    private string $numero;


    public function getDdd(): string
    {
        return $this->ddd;
    }

    private function setDdd(string $ddd): string
    {

        if(preg_match('/\d{2}/', $ddd) !== 1){
            throw new \Exception('DDD inválido'.PHP_EOL);
        }
        return $this->ddd = $ddd;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    private function setNumero(string $numero): string
    {

        if(preg_match('/\d{2}/', $numero) !== 1){
            throw new Exception('Número inválido');
        }
        return $this->numero = $numero;
    }

    public function __construct(string $ddd, string $numero)
    {
        $this->setDdd($ddd);
        $this->setNumero($numero);
    }
}