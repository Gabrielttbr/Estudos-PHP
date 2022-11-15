<?php
    spl_autoload_register(function (string $nomeCompletoDaClass){
        $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $nomeCompletoDaClass);
        $caminhoArquivo .= '.php';
        echo $caminhoArquivo;
        exit();
    });

    require_once 'src/Modelo/Pessoa.php';
    require_once 'src/Modelo/Cpf.php';
    require_once 'src/Modelo/Endereco.php';
    require_once 'src/Modelo/Funcionario.php';
    require_once 'src/Modelo/Conta/Titular.php';

    use src\Modelo\Pessoa\Pessoa;
    use src\Modelo\Endereco\Endereco;
    use src\Modelo\Funcionario\Funcionario;
    USE src\Modelo\Conta\Titular\Titular;
    use src\Modelo\Cpf\CPF;

    $funcionario = new Funcionario('Gabriel', new CPF('000.000.000-00'), new Endereco('sp', 'jdp', 'sao joaquim', '98'), 'Desenvolvedor');
    $endereco = new Endereco('São Paulo', 'Jardim Paulistano', 'Sõa joaquim', "98");
    $titular = new Titular('xxxx', new CPF('000.000.000-00'), 'Gabriel Carlos', $endereco);

