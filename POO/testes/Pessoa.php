<?php

    class Pessoas
    {
        private string $nome;
        private string $nascimento;
        private string $cpf;

        public function __construct($nome, $nascimento, $cpf)
        {
            $this->setNome($nome);
            $this->setNascimento($nascimento);
            $this->setCpf($cpf);
        }

        public function getNome(): string
        {
            return $this->nome;
        }
        public function setNome(string $nome): void
        {
            $this->nome = $nome;
        }

        public function getNascimento(): void
        {
            $this->nascimento;
        }
        public function setNascimento(string $nascimento): void
        {
            $this->nascimento = $nascimento;
        }

        public function getCpf(): string
        {
            return $this->cpf;
        }
        public function setCpf(string $cpf): void
        {
            $this->cpf = $cpf;
        }
    }