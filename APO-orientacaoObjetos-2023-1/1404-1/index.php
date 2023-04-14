    <?php

    class Veiculo
    { //classe pai
        protected $marca;
        protected $modelo;
        protected $cor;
        protected $velocidade;
        protected $passageiros;
        protected $ligado;

        public function __construct($marca, $modelo, $cor)
        {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->velocidade = 0;
            $this->passageiros = 0;
            $this->ligado = false;
        }

        public function acelerar($incremento)
        {
            if ($this->ligado) {
                $novaVelocidade = $this->velocidade + $incremento;
                if ($novaVelocidade >= 0 && $novaVelocidade <= 300) {
                    $this->velocidade = $novaVelocidade;
                } else {
                    echo "Velocidade deve estar entre 0 e 300 km/h<br>";
                }
            } else {
                echo "O veículo está desligado<br>";
            }
        }

        public function frear($decremento)
        {
            if ($this->ligado == True) {
                $novaVelocidade = $this->velocidade - $decremento;
                if ($novaVelocidade >= 0 && $novaVelocidade <= 300) {
                    $this->velocidade = $novaVelocidade;
                } else {
                    echo "Velocidade deve estar entre 0 e 300 km/h<br>";
                }
            } else {
                echo "O veículo está desligado<br>";
            }
        }

        public function getVelocidade()
        {
            return $this->velocidade;
        }

        public function exibirDetalhes()
        {
            echo "<hr><h1>Detalhes do Veículo</h1>";
            echo "Ligado: " . ($this->getLigado() ? 'sim' : 'não') . "<br>";
            echo "Marca: " . $this->marca . "<br>";
            echo "Modelo: " . $this->modelo . "<br>";
            echo "Cor: " . $this->cor . "<br>";
            echo "Velocidade: " . $this->getVelocidade() . "<br>";
            echo "Passageiros: " . $this->getPassageiro() . "<br>";
        }

        public function getPassageiro()
        {
            return $this->passageiros;
        }

        public function getLigado()
        {
            return $this->ligado;
        }

        public function setPassageiro($passageiro)
        {
            $this->passageiros = $passageiro;
        }

        public function getDesligado()
        {
            return $this->ligado;
        }

        public function setDesligado($desligado)
        {
            $this->ligado = $desligado;
        }

        public function setLigado($ligado)
        {
            $this->ligado = $ligado;
        }

        public function adicionarPassageiros($numero)
        {
            if ($numero >= 0 && $numero <= 5) {
                $this->passageiros += $numero;
            } else {
                echo "Número de passageiros deve ser maior ou igual a zero<br>";
            }
        }
    }

    class Carro extends Veiculo
    {
        public function __construct($marca, $modelo, $cor)
        {
            parent::__construct($marca, $modelo, $cor);
        }

        public function adicionarPassageiros($numero)
        {
            if ($numero >= 0 && $numero <= 5) {
                parent::adicionarPassageiros($numero);
            } else {
                echo "Número de passageiros nao deve ser mais que 5<br>";
            }
        }
    }

    class Fusca extends Carro
    {

        public function buzinar()
        {
            echo "Fusca Buzinando";
        }
    }

    class Porsche extends Carro
    {
        public function acelerar($incremento)
        {
            parent::acelerar($incremento * 3);
        }
    }

    class Ferrari extends Carro
    {
        public function acelerar($incremento)
        {
            parent::acelerar($incremento * 4);
        }
    }

    class Moto extends Veiculo
    {
        protected $cilindrada;

        public function __construct($marca, $modelo, $cor, $cilindrada)
        {
            parent::__construct($marca, $modelo, $cor);
            $this->cilindrada = $cilindrada;
        }

        public function adicionarPassageiros($numero)
        {
            if ($this->passageiros + $numero <= 2) {
                parent::adicionarPassageiros($numero);
            } else {
                echo "Número de passageiros nao deve ser mais que 2<br>";
            }
        }

        public function getCilindrada()
        {
            return $this->cilindrada;
        }

        public function empinar()
        {
            if ($this->getLigado() == True) {
                echo "A moto tá no grau";
            } else {
                echo "A moto não está ligada";
            }
        }
    }


    $fusca = new Fusca("Volkswagen", "Fusca", "Azul", 0);

    $porshe = new Porsche("Porshe", "911", "Vermelho", 0);

    $ferrari = new Ferrari("Ferrari", "F50", "Vermelho", 0);

    // $fusca->exibirDetalhes();
    $fusca->setLigado(true);
   $fusca->acelerar(50);
    $fusca->buzinar();
    $fusca->exibirDetalhes();

   // $porshe->exibirDetalhes();
   // $porshe->acelerar();
   // $porshe->exibirDetalhes();

   // $ferrari->exibirDetalhes();
 //   $ferrari->acelerar();
   // $ferrari->exibirDetalhes();
