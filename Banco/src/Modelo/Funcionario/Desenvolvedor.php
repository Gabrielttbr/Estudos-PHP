<?php

    namespace Gabriel\Banco\Modelo\Funcionario;

    use Gabriel\Banco\Modelo\Funcionario\Funcionario;

    class Desenvolvedor extends Funcionario
    {

        public function __construct(string $nome, string $cpf, string $nivel)
        {
            parent::__construct($nome, $cpf, $nivel);
        }
        public function CriarSoftaware(): string
        {
            echo "Parabéns, você criou so software";
        }
    }