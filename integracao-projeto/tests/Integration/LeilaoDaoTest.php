<?php

namespace Alura\Leilao\Tests\Integration;


use Alura\Leilao\Infra\ConnectionCreator;
use Alura\Leilao\Model\Leilao;
use PHPUnit\Framework\TestCase;
use Alura\Leilao\Dao\Leilao as leilaoDao;
class LeilaoDaoTest extends TestCase
{
    public function testInsercaoEBuscaDevemFuncionar(){
        $leilao = new Leilao('Mustang 0km');
        $leilaoDao = new leilaoDao( ConnectionCreator::getConnection());

        $leilaoDao->salva($leilao);
        $leiloes = $leilaoDao->recuperarNaoFinalizados();

        self::assertCount(1, $leiloes);
//        self::assertContainsOnlyInstancesOf(Leilao::class, $leiloes);
//        self::assertSame(
//            'Mustang 0km',
//            $leiloes[0]->recuperarDescricao()
 //       );
    }
}