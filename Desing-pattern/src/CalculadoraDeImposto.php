<?php

namespace Gabriel\DesignPatterns;

use Gabriel\DesignPatterns\Imposto\Imposto;

class CalculadoraDeImposto
{
    public function calcular(Orcamento $orcamento,Imposto $imposto){
        return $imposto->calcularImposto($orcamento);

    }
}