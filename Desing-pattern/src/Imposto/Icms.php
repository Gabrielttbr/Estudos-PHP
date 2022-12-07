<?php

namespace Gabriel\DesignPatterns\Imposto;

use Gabriel\DesignPatterns\Orcamento;

class Icms implements Imposto
{

    public function calcularImposto(Orcamento $orcamento): float
    {
       return $orcamento->valor * 0.1;
    }
}