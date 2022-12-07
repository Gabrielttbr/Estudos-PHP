<?php

namespace Gabriel\DesignPatterns\Imposto;

use Gabriel\DesignPatterns\Orcamento;

interface Imposto
{
    public function calcularImposto(Orcamento $orcamento): float;
}