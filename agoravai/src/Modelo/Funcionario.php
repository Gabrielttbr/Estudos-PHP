<?php

    namespace src\Modelo\Funcionario;
    use src\Modelo\Pessoa\Pessoa;

    class Funcionario extends Pessoa
    {
        private  string $cargo;

        public function __construct($nome, $cpf, $endereco, $cargo)
        {
            parent::__construct(  $cpf,  $nome,  $endereco);
            $this->cargo = $cargo;
        }

        public function getCargo()
        {
            return $this->cargo;
        }
        public function setCargo($cargo)
        {
            $this->cargo = $cargo;
        }



    }

