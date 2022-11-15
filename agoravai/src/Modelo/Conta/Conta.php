<?php
    namespace src\Modelo\Conta;
    class Conta extends Pessoa
    {
        private string $saldo;
        private string $agencia;


        public function __construct($saldo, $agencia, $cpf, $nome, $endereco)
        {
            ::parent::__construct($cpf, $nome, $endereco);
            $this->saldo = $saldo;
            $this->agencia = $agencia;
        }

    }
