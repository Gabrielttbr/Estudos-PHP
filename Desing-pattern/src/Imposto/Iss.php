<?php

namespace Gabriel\DesignPatterns\Imposto;
use Gabriel\DesignPatterns\Imposto\Imposto;


class Iss implements Imposto
{
    public function calcularImposto($orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}