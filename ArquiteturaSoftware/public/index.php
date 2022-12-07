<?php
require_once __DIR__.'../../vendor/autoload.php';

use Gabriel\Arquitetura\Cpf;
use Gabriel\Arquitetura\Email;
use Gabriel\Arquitetura\Aluno\Aluno;
use Gabriel\Arquitetura\Telefone;

$aluno = new Aluno(new cpf('000.000.000-00'), 'Rafael', new Email('gabrielcarloscavalcante@gmail.com'), new Telefone('11', '969386808'));

$gabriel = $aluno->criaAlunoComCpfNomeEmailTelefone('528.000.000-00', 'Gabriel', 'gabrielcarloscavalcante@gmail.com.br', '11', '969386808');
print_r($gabriel);