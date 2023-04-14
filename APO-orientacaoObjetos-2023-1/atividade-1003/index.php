<?php

class Pessoa{

    public $nome;
    public $idade;
    public $altura;
    public $peso;

    // public function __construct(){
    //     $this->idade = $idade;
    // }

    public function andar(){
        echo "estou andando...";
    }
    public function pular(){
        echo "Estou pulando";
    }
    public function falar(){
        echo "Estou falando";
    }
}

$maria = new Pessoa();
$maria->nome = "Maria";
$maria->idade = 20;
$maria->altura = 1.68;
$maria->peso = 58;

echo "Dados da pessoa: " . $maria->nome ;
echo "<br>";
echo "Idade: " . $maria->idade ;
echo "<br>";
echo "Altura: " . $maria->altura ;
echo "<br>";
echo "Peso: " . $maria->peso ;
echo "<br>";

$joao = new Pessoa();
$joao->nome = "João";
$joao->idade = 35;
$joao->altura = 1.75;
$joao->peso = 80;

echo "<br>";
echo "Dados da pessoa: " . $joao->nome ;
echo "<br>";
echo "Idade: " . $joao->idade ;
echo "<br>";
echo "Altura: " . $joao->altura ;
echo "<br>";
echo "Peso: " . $joao->peso ;
echo "<br>";

$jose = new Pessoa();
$jose->nome = "João";
$jose->idade = 42;
$jose->altura = 1.80;
$jose->peso = 78;

echo "<br>";
echo "Dados da pessoa: " . $jose->nome ;
echo "<br>";
echo "Idade: " . $jose->idade ;
echo "<br>";
echo "Altura: " . $jose->altura ;
echo "<br>";
echo "Peso: " . $jose->peso ;
echo "<br>";
?>