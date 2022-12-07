<?php

namespace Gabriel\Composer\Modulo;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    private $HttClient;
    private $crawler;
    public function __construct(ClientInterface $httClient, Crawler $crawler)
    {
        $this->HttClient = $httClient;
        $this->crawler = $crawler;
    }
    public function buscar(string $url): array
    {

        $resposta = $this->HttClient->request('GET', $url);

        $html = $resposta->getBody();
        $this->crawler->addHtmlContent($html);

        $cursos = $this->crawler->filter('span.card-curso__nome');

    }
}