<?php
    namespace src\Modelo\Endereco;
    class Endereco
    {
        private string $cidade;
        private string $bairro;
        private string $rua;
        private string $numero;


        public function getCidade()
        {
            return $this->cidade;
        }
        public function setCidade($cidade)
        {
            $this->cidade = $cidade;
        }


        public function getBairro()
        {
            return $this->bairro;
        }
        public function setBairro($bairro)
        {
            $this->bairro = $bairro;
        }


        public function getRua()
        {
            return $this->rua;
        }


        public function setRua($rua)
        {
            $this->rua = $rua;
        }


        public function getNumero()
        {
            return $this->numero;
        }


        public function setNumero($numero)
        {
            $this->numero = $numero;
        }


        public function __construct(  $cidade,  string $bairro, string  $rua, string $numero)
        {
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->rua = $rua;
            $this->numero = $numero;
        }


    }
