<?php
    class Funcionario
    {
        public  string $endereco;

        public function __construct( $endereco)
        {

            $this->setEndereco($endereco);
        }

        public function setEndereco($endereco){
            return $this->endereco = $endereco;
        }

    }
    $funcionarioNovo = new Funcionario( 'São Joaquim 98');
    var_dump($funcionarioNovo);