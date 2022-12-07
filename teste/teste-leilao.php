<?php

require_once 'vendor/autoload.php';

use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

$leilao = new Leilao('Palio 2010 ');

$mario = new Usuario("Maria");
$joao = new Usuario("João");

$leilao->recebeLance(new Lance($joao, 1000));
$leilao->recebeLance(new Lance($mario, 10000));

$leiloeiro = new Avaliador();
$leiloeiro->avaliar($leilao);

echo $leiloeiro->getMairValor();