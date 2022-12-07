<?php

namespace Gabriel\Arquitetura\Dominio\Aluno;

use Gabriel\Arquitetura\Cpf;
use Gabriel\Arquitetura\Email;
use Gabriel\Arquitetura\Telefone;

class Aluno
{
    private Cpf $cpf;
    private string $nome;
    private Email $email;
    private Telefone $telefone;

    public function __construct(Cpf $cpf, string $nome, Email  $email,Telefone $telefone)
    {
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
    }
    public static function criaAlunoComCpfNomeEmailTelefone(string $numeroCpf, string $nome, string  $email, string $ddd, string $numero){
        return new Aluno(new Cpf($numeroCpf), $nome, new Email($email), new Telefone($ddd, $numero));
    }


}