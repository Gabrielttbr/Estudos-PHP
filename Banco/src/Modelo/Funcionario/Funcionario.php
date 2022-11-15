<?php
    namespace Gabriel\Banco\Modelo\Funcionario;

    abstract class Funcionario
    {
        private string $nome;
        private string $cpf;
        private string $nivel;


        public function __construct(string $nome, string $cpf, string $nivel)
        {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->nivel = $nivel;
        }


        public function getNome(): string
        {
            return $this->nome;
        }
        public function setNome(string $nome): void
        {
            $this->nome = $nome;
        }


        public function getCpf(): string
        {
            return $this->cpf;
        }
        public function setCpf(string $cpf): void
        {
            $this->cpf = $cpf;
        }


        public function getNivel(): string
        {
            return $this->nivel;
        }
        public function setNivel(string $nivel): void
        {
            $this->nivel = $nivel;
        }


    }