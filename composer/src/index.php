<?php
    require '../vendor/autoload.php';


    use Gabriel\Composer\Modulo\Buscador;
    use GuzzleHttp\Client;
    use Symfony\Component\DomCrawler\Crawler;
    $crawler = new Crawler();
    $client = new Client(['base_uri' => 'https://www.alura.com.br/']);
    $buscador = new Buscador($client, $crawler);
    $cursos = $buscador->buscar('https://www.alura.com.br/cursos-online-programacao/php');
