<?php
 
 class Pessoa {

    private $idade;
    private $altura;
    private $peso;

    public function __construct($idade, $altura, $peso) {
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function andar() {
        echo "Andando..." . '<br>';
    }

    public function falar() {
        echo "Falando..." . '<br>';
    }

    public function pular() {
        echo "Pulando..." . '<br>';
    }
 }

 $maria = new Pessoa(20, 1.60, 60);
    $maria->setIdade(21);

 //var_dump($maria);
 $joao = new Pessoa(35, 1.75, 80);
    $joao->setPeso(90);

 $jose = new Pessoa(42, 1.80, 78);
    $jose->setAltura(1.90);

 echo "dados de maria: " . '<br>';
 echo "idade: " . $maria->getIdade() . ' anos ' .'<br>' . "altura: " . $maria->getAltura() . ' metros'. '<br>' ."peso: " . $maria->getPeso() . ' Kg'. '<br>';
 $maria->andar();
 echo '<br>';   
 echo "dados de joao: " . '<br>';
 echo "idade: " . $joao->getIdade() . ' anos ' .'<br>' . "altura: " . $joao->getAltura() . ' metros'. '<br>' ."peso: " . $joao->getPeso() . ' Kg'. '<br>';
    $joao->falar();
 echo '<br>';
 echo "dados de jose: " . '<br>';
 echo "idade: " . $jose->getIdade() . ' anos ' .'<br>' . "altura: " . $jose->getAltura() . ' metros'. '<br>' ."peso: " . $jose->getPeso() . ' Kg'. '<br>';
    $jose->pular();

?>