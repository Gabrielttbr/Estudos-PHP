<?php

namespace Alura\Leilao\Tests\Integracao\Dao;

use Alura\Leilao\Dao\Leilao AS LeilaoDao;
use Alura\Leilao\Infra\ConnectionCreator;
use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Usuario;
use mysql_xdevapi\Table;
use PHPUnit\Framework\TestCase;
use Alura\Leilao\Model\Leilao;

class LeilaoTest extends TestCase
{
    protected static $pdo;
    //setUpBeforeClass executa antes de classe começar a exucutar antes de tudp!
    public static function setUpBeforeClass(): void
    {
        self::$pdo = new \PDO('sqlite:memory');
        self::$pdo->exec('create table leiloes(
                                id integer primary key,
                                descricao TEXT,
                                finalizado BOOL,
                                dataInicio TEXT
                        );');
    }

    //SetUp e executado antes de cada método.
    protected function setUp(): void
    {

        self::$pdo->beginTransaction();
    }

    public function testBuscaLeiloesNaoFinalizados()
    {
        $leilao = new Leilao('Variante 0Km');
        $leilaoDao = new LeilaoDao(self::$pdo);

        $leilaoDao->salva($leilao);
        $leiloes = $leilaoDao->recuperarNaoFinalizados();

        self::assertContainsOnlyInstancesOf(Leilao::class, $leiloes);
        self::assertSame(
            'Variante 0Km',
            $leiloes[0]->recuperarDescricao()
        );
        self::$pdo->exec('DELETE FROM leiloes where true');
    }

    public function testBuscaLeiloesFinalizados(){
        $leilao = new Leilao('audi-r8');
        $leilao->finaliza();
        $leilaoDao = new LeilaoDao(self::$pdo);
        $leilaoDao->salva($leilao);
        $leilaoFinalizados = $leilaoDao->recuperarFinalizados();
        self::assertContainsOnlyInstancesOf(Leilao::class, $leilaoFinalizados);
        self::assertSame(
            'audi-r8',
            $leilaoFinalizados[0]->recuperarDescricao()
        );
        self::$pdo->exec('DELETE FROM leiloes where true');
    }

    public function testSeAoAtualizarUmLeilaoEstaTudoCerto(){
        //Arrange
        $leilao = new Leilao('Onix 0km cinza');
        $leilaoDao = new LeilaoDao(self::$pdo);
        $leilao->finaliza();
        $resultado = $leilaoDao->salva($leilao);
        $resultado->finaliza();
        //Act

        $leilaoDao->atualiza($resultado);

        //Assert
        self::assertCount(1, $leilaoDao->recuperarFinalizados());
        self::assertSame('Onix 0km cinza', $leilaoDao->recuperarFinalizados()[0]->recuperarDescricao());

    }
    //Assim que cada método chega ao seu fim e executado esse método
    protected function tearDown(): void
    {

        //Fala para ignorar a transação feita.
        self::$pdo->rollBack();
    }
}