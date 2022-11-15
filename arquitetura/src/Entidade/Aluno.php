<?php
    namespace Gabriel\Arquitetura\Entidade;
    use Gabriel\Arquitetura\ValuesObjects\Cpf;
    use Gabriel\Arquitetura\ValuesObjects\Email;

    class Aluno
    {
        private Cpf $cpf;
        private string $nome;
        private Email $email;
    }