<?php

namespace Model;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use PHPUnit\Framework\TestCase;

class LeilaoTest extends TestCase
{
    /**
     * @dataProvider gerarLances
     */
    public function testrecebeLance(
        int $qtdLances,
        Leilao $leilao,
        array $valores
    ){
        self::assertCount($qtdLances, $leilao->getLances());

        foreach ($valores as $i => $valorEsperado) {
            self::assertEquals($valorEsperado, $leilao->getLances()[$i]->getValor());
        }
    }

    public function testLeilaoNaoDeveReceberLancesSequenciaisDoMesmoUsuario(){
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage("O usuário não pode propor dois lances seguidos");
        $francisca = new Usuario('Francisca');
        $leilao = new Leilao('CRETA 2019');

        $leilao->recebeLance(new lance($francisca, 3000));
        $leilao->recebeLance(new lance($francisca, 4000));
        $leilao->recebeLance(new lance($francisca, 4000));
        $leilao->recebeLance(new lance($francisca, 4000));
//
//        self::assertCount(1, $leilao->getLances());
//        self::assertEquals($leilao->getLances()[0]->getUsuario(), $francisca);

    }
    public function gerarLances(){
        $gabriel = new Usuario('Gabriel');
        $rafael = new Usuario('Rafael');
        $leticia = new Usuario('Letícia');
        $ana = new usuario('Ana');
        $leilao = new Leilao('FORD K 2015');

        $leilao->recebeLance(new Lance($gabriel, 3000));
        $leilao->recebeLance(new Lance($ana, 2000));
        $leilao->recebeLance(new Lance($rafael, 6000));
        $leilao->recebeLance(new Lance($leticia, 8000));

        $leilaoOpala = new leilao('Opala 1970 orginal');

        $leilaoOpala->recebeLance(new Lance($leticia, 10000));
        $leilaoOpala->recebeLance(new lance($gabriel, 35000));
        return [
            'lance-1' => [4, $leilao, [3000, 2000, 6000, 8000]],
            'lance-2' => [2, $leilaoOpala, [10000,35000]]
        ];
    }
    public function testLeilaoNaoPodeConterUmUsuarioComMaisDeCincoLances(){
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage('Usuário não pode dar mais de cinco lances');
        $leilao = new Leilao("Bmw 2014 turbo v8");
        $gabriel = new Usuario('Gabriel');
        $rafael = new Usuario('Rafael');
        $leticia = new Usuario('Letícia');
        $ana = new usuario('Ana');

        $leilao->recebeLance(new Lance($gabriel, 5000));
        $leilao->recebeLance(new lance($leticia, 10000));
        $leilao->recebeLance(new Lance($gabriel, 12000));
        $leilao->recebeLance(new Lance($ana, 15000));
        $leilao->recebeLance(new lance($gabriel, 16000));
        $leilao->recebeLance(new Lance($rafael, 18000));
        $leilao->recebeLance(new Lance($gabriel, 30000));
        $leilao->recebeLance(new lance($leticia, 60000));
        $leilao->recebeLance(new lance($gabriel, 70000));
        $leilao->recebeLance(new lance($rafael, 80000));
        $leilao->recebeLance(new lance($gabriel, 90000));

//        $contadorDeLancesUsuarioGabriel = 0;
//        foreach ($leilao->getLances() as $lance){
//            if ($lance->getUsuario()->getNome() == 'Gabriel' ){
//                $contadorDeLancesUsuarioGabriel+= 1;
//            }
//        }
//
//        print_r($contadorDeLancesUsuarioGabriel);
//        self::assertEquals(5,$contadorDeLancesUsuarioGabriel);
    }


}
