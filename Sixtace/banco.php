<?php
    $contaCorrewntes = [
        '123.456.789-10' => [
            'titular' => 'Maria',
            'saldo' => 10000
        ],
        '123.456.11-12' => [
            'titular' => 'Alberto',
            'saldo' => 4500
        ],
        '123.256.789-12' => [
            'titular' => 'Vinicius',
            'saldo' => 100
        ],
    ];
    function exibirMenssagem( string $mss)
    {
         echo "$mss".PHP_EOL;
    }
    function exiberCpf(string $nome)
    {
       foreach ($contaCorrewntes as $conta){
            if($conta[titular] == $nome){
                return $conta;
            }
        }
    }

