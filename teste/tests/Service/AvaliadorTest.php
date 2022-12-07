<?php

namespace Alura\leilao\Testes\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;
use PharIo\Manifest\LicenseElement;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{
    private $leiloerio;

    protected function setUp(): void
    {
        $this->leiloerio = new Avaliador();
    }

    /**
     * @dataProvider entregueLeiloes
     */
    public function testAvaliadorDeveEncontrarOMaiorValorDeLances(Leilao $leilao)
    {
        $this->leiloerio->avaliar($leilao);
        $maiorValor = $this->leiloerio->getMairValor();
        self::assertEquals(3000, $maiorValor);

    }
    /**
     * @dataProvider entregueLeiloes
     */
    public function testAvaliadorDeveEncontrarOMenorLance(Leilao $leilao)
    {

        $this->leiloerio = new Avaliador();
        $this->leiloerio->avaliar($leilao);
        $menorValor = $this->leiloerio->getMenorValor();
        self::assertEquals(1000, $menorValor);
    }
    /**
     * @dataProvider entregueLeiloes
     */
    public function testAvaliadorDeveBuscarOsTrêsMaioresValores(Leilao $leilao)
    {
        $this->leiloeiro = new Avaliador();
        $this->leiloeiro->avaliar($leilao);
        $maiores = $this->leiloeiro->getMaioresLances();

        self::assertCount(3, $maiores);
        self::assertEquals(3000, $maiores[0]->getValor());
        self::assertEquals(2000, $maiores[1]->getValor());
        self::assertEquals(1000, $maiores[2]->getValor());
    }


    public function leilaoEmOrdemCresente()
    {

        $leilao = new Leilao("Fiat toro 2023");
        $maria = new Usuario('Maria');
        $joao = new Usuario('Joao');
        $gabriel = new Usuario("Gabriel");

        $leilao->recebeLance(new Lance($maria,1000));
        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($gabriel, 3000));

        return $leilao;
    }
    public function testAvaliadorNaoPodeContinuarSeOLeilaoNaoConterLances(){
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage("Não pode instânciar um leilao vazio, vacilão");
        $leilao = new Leilao('Saveiro cross');
        $this->leiloerio->avaliar($leilao);
    }
    public function leilaoEmOrdemDecrecente()
    {

        $leilao = new Leilao("ECO SPORT 2015 2.0");
        $felipe = new Usuario('Felipe');
        $joao = new Usuario('Joao');
        $francisa = new Usuario("Francisca");

        $leilao->recebeLance(new Lance($felipe,3000));
        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($francisa, 1000));

        return $leilao;
    }

    public function leilaoEmOrdemAleatoria()
    {
        $leilao = new Leilao("Honda Civic 2023 2.0");
        $joao = new Usuario("Joao");
        $maria = new Usuario("Maria");
        $gabriel = new Usuario("Gabriel");

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria ,1000));
        $leilao->recebeLance(new Lance($gabriel, 3000));

        return $leilao;
    }
    public function testLeilaoFinalizadoNaoPoderSerAvaliado()
    {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage("Leilão não pode ser avaliado quando já foi finalizado");
        $leilao = new Leilao("HRV 2015");
        $gabriel = new Usuario("Gabriel");
        $leilao->recebeLance(new Lance($gabriel, 110000));
        $leilao->finalizar();
        $this->leiloerio->avaliar($leilao);

    }
    public function entregueLeiloes()
    {
        return[
            'ordem aleatória' => [$this->leilaoEmOrdemAleatoria()],
            'ordem cresente' =>[$this->leilaoEmOrdemCresente()],
            'ordem decresente' => [$this->leilaoEmOrdemDecrecente()]
        ];
    }



}