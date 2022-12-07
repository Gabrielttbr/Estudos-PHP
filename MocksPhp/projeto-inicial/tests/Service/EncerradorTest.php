<?php

namespace Alura\Leilao\Tests\Service;

use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Dao\Leilao as LeilaoDao;
use PHPUnit\Framework\TestCase;
use Alura\Leilao\Service\Encerrador;


//class LeilaoDaoMock extends LeilaoDao
//{
//    private $leiloes = [];
//
//    public function salva(Leilao $leilao): void
//    {
//        $this->leiloes[] = $leilao;
//    }
//
//    public function recuperarFinalizados(): array
//    {
//        return array_filter($this->leiloes, function (Leilao $leilao) {
//            return $leilao->estaFinalizado();
//        });
//    }
//
//    public function recuperarNaoFinalizados(): array
//    {
//        return array_filter($this->leiloes, function (Leilao $leilao) {
//            return !$leilao->estaFinalizado();
//        });
//    }
//
//    public function atualiza(Leilao $leilao)
//    {
//        return;
//    }
//}



class EncerradorTest extends TestCase
{
    public function testLeiloesComMaisDeUmaSemanaDevemSerEncerrados()
    {
        $fiat147 = new Leilao('Fiat 147', new \DateTimeImmutable('2000-01-01'));
        $opala = new Leilao('Opala 1970', new \DateTimeImmutable('2000-01-01'));

        $leilaoDao = $this->createMock(LeilaoDao::class);
//        $leilaoDao = $this->getMockBuilder(LeilaoDao::class)
//            ->setConstructorArgs([new \PDO('sqlite::memory:')])
//            ->getMock();
        $leilaoDao->method('recuperarFinalizados')->willReturn([$fiat147, $opala]);
        $leilaoDao->method('recuperarNaoFinalizados')->willReturn([$fiat147, $opala]);
        $leilaoDao->expects($this->exactly(2))->method('atualiza')->withConsecutive([$fiat147], [$opala]);

        $encerrador = new Encerrador($leilaoDao);
        $encerrador->encerra();


        $leiloes = $leilaoDao->recuperarFinalizados();

        self::assertCount(2, $leiloes);
        self::assertTrue($leiloes[0]->estaFinalizado());
        self::assertTrue($leiloes[1]->estaFinalizado());
        self::assertEquals($fiat147->recuperarDescricao(), $leiloes[0]->recuperarDescricao());
        self::assertEquals($opala->recuperarDescricao(), $leiloes[1]->recuperarDescricao());
    }

}