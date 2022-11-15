<?php
    $ListasDeConta = [
        '000.000.000-00' => [
            'id' => 1,
            'nome' => "Gabriel",
            'nascimento' => '09/08/2004',
            'tipo' => 'poupança'
        ],
        '111.111.111-11' => [
            'id' => 2,
            'nome' => "Rafael",
            'nascimento' => '19/01/2000',
            'tipo' => 'poupança'
        ],
        '222.222.222-22' => [
            'id' => 3,
            'nome' => "Carlos",
            'nascimento' => '01/06/2015',
            'tipo' => 'poupança'
        ],
        '333.333.333-33' => [
            'id' => 4,
            'nome' => "Fran",
            'nascimento' => '29/09/1964',
            'tipo' => 'corrente'
        ],
    ];

    function getById(int $id, $lista)
    {
        foreach ($lista as $item){
            if($item['id'] == $id){
                return $item;
            }
        }
        return null;
    }
    $buscar = getById(1, $ListasDeConta);
    print_r($buscar);