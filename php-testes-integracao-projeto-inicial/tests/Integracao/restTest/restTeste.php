<?php

namespace Integracao\restTest;

use PHPUnit\Framework\TestCase;

class restTeste extends TestCase
{
    public function testRequisicaoRetornaArrayECodigoValido(){
        $resposta = file_get_contents('http://localhost:8080/rest.php');

        self::assertStringContainsString('200 OK', $http_response_header[0]);
        self::assertIsArray(json_encode($resposta));

    }
}