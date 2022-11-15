<?php
    require_once 'autoload.php';

    use Gabriel\Banco\Modelo\Funcionario\Funcionario;
    use Gabriel\Banco\Modelo\Conta\Salario;
    use Gabriel\Banco\Modelo\Conta\Poupanca;
    use Gabriel\Banco\Modelo\Conta\Corrente;
    use Gabriel\Banco\Modelo\Funcionario\Bancario;
    use Gabriel\Banco\Modelo\Funcionario\Desenvolvedor;
    use Gabriel\Banco\Modelo\Funcionario\Gestor;

    $contaSalario = new Salario('Gabriel', 2.900);
    $contaCorrente = new Corrente('Rafael', 5.000);
    $contaPoupanca = new Poupanca('Francisca', 10.000);
    $novoBancario = new Bancario('João', '528.071.048-98', 'júnior');
    $novoDesenvolvedor = new Desenvolvedor('Higor', '000.000.000-00', 'jível');
    $novoGestor = new Gestor('Jair', '312.231.132-22', 'pleno');

    echo "=============================".PHP_EOL;
    print_r($contaSalario);
    echo "=============================".PHP_EOL;
    print_r($contaCorrente);
    echo "=============================".PHP_EOL;
    print_r($contaPoupanca);
    echo "=============================".PHP_EOL;
    print_r($novoBancario);
    echo "=============================".PHP_EOL;
    print_r($novoGestor);