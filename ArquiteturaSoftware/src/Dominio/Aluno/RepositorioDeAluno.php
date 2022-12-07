<?php

namespace Gabriel\Arquitetura\Dominio\Aluno;

use Gabriel\Arquitetura\Dominio\Cpf;

interface RepositorioDeAluno
{
    public function adicionar(Aluno $aluno): bool;
    public function buscarPorCpf(Cpf $cpf): array;
    public function buscarTodos(): array;
    public function removeAlunos(): bool;
}