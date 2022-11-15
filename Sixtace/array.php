<?php
    #Arrays associativos
    $listadecontas = [
        '33333333335' => [
            'nome' => 'Gabriel Carlos Cavalcante',
            'saldo' => 90.000
        ],
        '15345551585' => [
            'nome' => "Rafael Carlos Cavalcante",
            'saldo' => 65.000
        ],
        '65446546546' => [
            'nome' => "Francisca Maria Neta",
            'saldo' => 630.000
        ],
    ];
    foreach ($listadecontas as $conta){
        echo $conta['nome'].PHP_EOL;
    }