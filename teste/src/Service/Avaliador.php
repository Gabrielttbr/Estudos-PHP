<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private $maiorValor = 0;
    private $menorValor = INF;
    private $maioresLances;
    public function avaliar(Leilao $leilao): void
    {
        if($leilao->getLeilaoAcabou() === true){
            throw new \DomainException("Leilão não pode ser avaliado quando já foi finalizado");
        }
        if(empty($leilao->getLances())){
            throw new \DomainException('Não pode instânciar um leilao vazio, vacilão');
        }

        foreach ($leilao->getLances() as $lance){
                if($lance->getValor() > $this->maiorValor){
                    $this->maiorValor = $lance->getValor();
                }
                if($lance->getValor() < $this->menorValor){
                    $this->menorValor = $lance->getValor();
                }
        }
        $laces = $leilao->getLances();
        usort($laces, function ($lance1, $lance2) {
            return $lance2->getValor() - $lance1->getValor();
        });
        $this->maioresLances = array_slice($laces, 0, 3);

    }
    public function getMairValor()
    {
        return $this->maiorValor;
    }
    public function getMenorValor(){
        return $this->menorValor;
    }


    public function getMaioresLances()
    {
        return $this->maioresLances;
    }
}