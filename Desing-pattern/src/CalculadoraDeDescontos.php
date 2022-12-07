<?php

namespace Gabriel\DesignPatterns;

use Gabriel\DesignPatterns\Orcamento;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float{
        if($orcamento->quantidadeDeItens > 5){
            return $orcamento->valor * 0.1;
        }
        return 0;
    }
}