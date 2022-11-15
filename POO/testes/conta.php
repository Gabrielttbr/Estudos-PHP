<?php
    class conta{
        public string $nome;
        public string $tipo;
        public float $saldo;

        function __construct(string $nome, string $tipo, float $saldo)
        {
            $this->setNome($nome);
            $this->setTipo($tipo);
            $this->setSaldo($saldo);
        }


        public function setSaldo($saldo)
        {
            $this->saldo = $saldo;
        }
        public function getSaldo()
        {
            return $this->saldo;
        }

        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }
        public function getTipo()
        {
            return $this->tipo;
        }

        public  function getNome()
        {
            return $this->nome;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function mostrarDados()
        {
              echo " Nome: ".$this->getNome().PHP_EOL;
              echo " Saldo: ".$this->getSaldo().PHP_EOL;
              echo " Tipo: ".$this->getTipo().PHP_EOL;
         }
         public function sacar(float $valor)
         {
            if($this->getSaldo() > $valor){
                $this->setSaldo($this->getSaldo() - $valor);
                echo "Salque: $valor".PHP_EOL;
                echo "Saldo atual: ".$this->getSaldo().PHP_EOL;
                return;
            }
                echo "Você não pode sacar";

         }
        public function depositar(float $valor){
            if($valor < 0)  return "Não pode depositar um valor negativo".PHP_EOL;
            $this->setSaldo($this->getSaldo() + $valor);
            return "Saldo Atual: ".$this->getSaldo().PHP_EOL;
        }
    }
    $NovaConta = new conta('Gabriel', 'poupança' , 10000);
    echo $NovaConta->depositar(900000);


