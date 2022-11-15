<?php
    $string = strtoupper("Gabriel Carlos Cavalcante");
    $idade = 24;
    $nascimento = "10/02/2002";
    $array = [
        'nome' =>$string,
        'idade' => $idade,
        'nascimento' => $nascimento,
    ];
    print_r($array);
    function mensagem( string $mss)
    {
        echo $mss.PHP_EOL;
    }
    $arrayNumeral = [1,2,3,4,5,6,5,];
    foreach ($arrayNumeral as $num)
        echo mensagem($num);
    print("===========".PHP_EOL);
    print(count($arrayNumeral));