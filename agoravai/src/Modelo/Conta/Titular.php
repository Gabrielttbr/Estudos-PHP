<?php
    namespace src\Modelo\Conta\Titular;

    use src\Modelo\Pessoa\Pessoa;
    use src\Modelo\Endereco\Endereco;
    class Titular extends Pessoa
    {
        private string $atirbutoDiferente;

        public function __construct($atirbutoDiferente, $cpf, $nome, $endereco)
        {
            parent:: __construct($cpf, $nome, $endereco);
            $this->atirbutoDiferente = $atirbutoDiferente;
        }


    }

