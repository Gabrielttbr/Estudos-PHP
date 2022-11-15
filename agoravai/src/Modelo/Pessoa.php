<?php
    namespace src\Modelo\Pessoa;
    use src\Modelo\Cpf\CPF;
    use src\Modelo\Endereco\Endereco;

    class Pessoa
    {
        private CPF $cpf;
        private string $nome;
        private Endereco $endereco;

        public function getCpf()
        {
            return $this->cpf;
        }
        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }

        public function getNome()
        {
            return $this->nome;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getEndereco()
        {
            return $this->endereco;
        }
        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
        }

        public function __construct( $cpf, $nome, $endereco)
        {
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->endereco = $endereco;
        }


    }

