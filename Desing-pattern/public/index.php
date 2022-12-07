<?php

    require_once __DIR__.'../../vendor/autoload.php';

    use Gabriel\DesignPatterns\Orcamento;
    use Gabriel\DesignPatterns\Imposto\Iss;
    use Gabriel\DesignPatterns\CalculadoraDeImposto;
    use Gabriel\DesignPatterns\Imposto\Icms;
    use Gabriel\DesignPatterns\CalculadoraDeDescontos;
/*
    $orcamento = new Orcamento();
    $orcamento->valor = 20;


    $calculadoraImposto = new CalculadoraDeImposto();


    print_r($calculadoraImposto->calcular($orcamento, new Icms()));
*/
    $calculadoraDesconto = new CalculadoraDeDescontos();
    $orcamento = new Orcamento();
    $orcamento->valor = 200;
    $orcamento->quantidadeDeItens = 7;

    echo $calculadoraDesconto->calculaDescontos($orcamento);