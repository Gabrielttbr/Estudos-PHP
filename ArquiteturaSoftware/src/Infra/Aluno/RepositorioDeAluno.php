<?php

namespace Gabriel\Arquitetura\Infra\Aluno;

use Gabriel\Arquitetura\Dominio\Aluno\Aluno;
use Gabriel\Arquitetura\Dominio\Aluno\RepositorioDeAluno;
use Gabriel\Arquitetura\Dominio\Cpf;

class RepositorioDeAlunoPdo implements RepositorioDeAluno
{
    private \PDO $conexao;

    public function __construct(\PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function adicionar(Aluno $aluno): bool
    {
        // TODO: Implement adicionar() method.
    }

    public function buscarPorCpf(Cpf $cpf): array
    {
        // TODO: Implement buscarPorCpf() method.
    }

    public function buscarTodos(): array
    {
        // TODO: Implement buscarTodos() method.
    }

    public function removeAlunos(): bool
    {
        // TODO: Implement removeAlunos() method.
    }
}