<?php
    namespace Gabriel\Banco\Modelo\Funcionario;

    use Gabriel\Banco\Modelo\Funcionario\Funcionario;

    class Bancario extends Funcionario
    {

        public function __construct(string $name, string $cpf,string $nivel)
        {
            parent::__construct($name, $cpf, $nivel);
        }

        public function AbrirConta($tipo, $saldo, $nome ){

        }
        public function fecharConta(){

        }
    }