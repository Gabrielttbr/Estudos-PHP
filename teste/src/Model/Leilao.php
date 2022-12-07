<?php

namespace Alura\Leilao\Model;

class Leilao
{
    /** @var Lance[] */
    private $lances = [];
    /** @var string */
    private $descricao;
    private $leilaoAcabou = false;

    public function __construct(string $descricao)
    {
        $this->descricao = $descricao;
        $this->lances = [];
    }

    public function recebeLance(Lance $lance)
    {


        if(!empty($this->lances) && $lance->getUsuario() == $this->lances[count($this->lances) -1]->getUsuario())
        {
            throw new \DomainException("O usuário não pode propor dois lances seguidos");
        }
        if($this->verificaQuantidadeDeLancesDoUsuario($lance->getUsuario()) >= 5 ){
            throw new \DomainException("Usuário não pode dar mais de cinco lances");
        }

        array_push( $this->lances, $lance);
    }

    /**
     * @return Lance[]
     */
    public function getLances(): array
    {
        return $this->lances;
    }
    private function verificaQuantidadeDeLancesDoUsuario(Usuario $usuario){
        $totalLancesUsuario = array_reduce(
            $this->lances,
            function (int $totalAcumulado, Lance $lanceAtual) use ($usuario) {
                if ($lanceAtual->getUsuario() == $usuario) {
                    return $totalAcumulado + 1;
                }
                return $totalAcumulado;
            },
            0
        );
        return $totalLancesUsuario;
    }
    public function finalizar(){
        $this->leilaoAcabou = true;
    }
    public function getLeilaoAcabou() {
        return $this->leilaoAcabou;
    }


}
