<?php
    namespace Conta\Pessoa;
    class Pessoa
    {
        private string $cpf;
        public function __construct($cpf)
        {
            $this->setCPF($cpf);
        }

        public function getCPF()
        {
            return $this->cpf;
        }
        public function setCPF($cpf)
        {
            return$this->cpf = $cpf;
        }

    }
    $NewPessoa = new Pessoa('000.000.000-00');
    var_dump($NewPessoa);