    <?php

    class Veiculo { //classe pai
        protected $marca;
        protected $modelo;
        protected $cor;
        protected $velocidade;

        public function __construct($marca, $modelo, $cor, $velocidade) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->velocidade = 0;
        }

        public function acelerar() {
            $this->velocidade += 10;
        }

        public function frear(){
            $this->velocidade -= 10;
        }

        public function getVelocidade() {
            return $this->velocidade;
        }

        public function exibirDetalhes() {
            echo "<hr><h1>Detalhes do Veículo</h1>";
            echo "Marca: " . $this->marca . "<br>";
            echo "Modelo: " . $this->modelo . "<br>";
            echo "Cor: " . $this->cor . "<br>";
            echo "Velocidade: " . $this->getVelocidade() . "<br>";
        }

    }


class Carro extends Veiculo{
    public function __construct($marca, $modelo, $cor, $velocidade) {
        parent::__construct($marca, $modelo, $cor, $velocidade);
    }
}

class Fusca extends Carro {

    public function buzinar(){
        echo "Fusca Buzinando";
    }
}

class Porsche extends Carro {
    public function acelerar(){
        $this->velocidade += 20;
    }
}

class Ferrari extends Carro {
    public function acelerar(){
        $this->velocidade += 30;
    }
}

$fusca = new Fusca("Volkswagen", "Fusca", "Azul", 0);

$porshe = new Porsche("Porshe", "911", "Vermelho", 0);

$ferrari = new Ferrari("Ferrari", "F50", "Vermelho", 0);

$fusca->exibirDetalhes();
$fusca->acelerar();
$fusca->buzinar();
$fusca->exibirDetalhes();

$porshe->exibirDetalhes();
$porshe->acelerar();
$porshe->exibirDetalhes();

$ferrari->exibirDetalhes();
$ferrari->acelerar();
$ferrari->exibirDetalhes();