<?php

    namespace Gabriel\Banco\Modelo\Funcionario;

    use Gabriel\Banco\Modelo\Funcionario\Funcionario;

    class Gestor extends Funcionario
    {


        public function __construct(string $nome, string $cpf, string $nivel)
        {
            parent::__construct($nome, $cpf, $nivel);
        }


        public function gestao(): string {
            echo "Está fazendo uma boa gestão";
            return  '';
        }

    }