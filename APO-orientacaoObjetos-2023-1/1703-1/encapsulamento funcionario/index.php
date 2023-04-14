<?php

/*sistema cadastro de funcionarios*/
class Pessoa {
    private $nome;
    private $idade;
    private $altura;
    private $peso;

    public function __construct($nome ,$idade, $altura, $peso) {
        $this->nome = $nome;
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

class Funcionario{
    private $salario;
    private $cargo;

    public static $funcionarios = array();

    public function __construct( $cargo, $salario){
        $this->cargo = $cargo;
        $this->salario = $salario;
        self::$funcionarios[] = $this; //adiciona o objeto na lista de funcionarios
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function trabalhar(){
        echo "O funcionario esta Trabalhando..." . '<br>';
    }

    public function recebeAumento($valor){
        $this->salario += $valor;
        echo "O funcionario recebeu um aumento de: " . $valor . '!<br>';
    }

    public static function mediaSalarial(){
        $totalSalarios = 0;
        foreach(self::$funcionarios as $funcionario){
            $totalSalarios += $funcionario->getSalario();
            echo "valor total do salario R$ " . $totalSalarios . '<br>';
        }
        return $media = round($totalSalarios / count(self::$funcionarios), 2);
    }

    public static function totalFuncionarios(){
        $total = count(self::$funcionarios);
       echo "Total de funcionarios cadastrados: " . $total . '<br>';
    }
//metodo aumentar todos os salarios em %

    public static function aumentarSalario($porcentagem){
        foreach(self::$funcionarios as $funcionario){
            $funcionario->setSalario($funcionario->getSalario() * (1 + $porcentagem / 100));
            echo "O funcionario " . $funcionario->getNome() . " recebeu um aumento de " . $porcentagem . "% e seu novo salario é R$ " . $funcionario->getSalario() . '<br>';
        }
    }
    // public function calculaGanhoAnual(){
    //     return $this->salario * 12;
    // }

}

// $maria = new Pessoa(20, 1.60, 60);
//     $maria->setIdade(21);

//  //var_dump($maria);
//  $joao = new Pessoa(35, 1.75, 80);
//     $joao->setPeso(90);

//  $jose = new Pessoa(42, 1.80, 78);
//     $jose->setAltura(1.90);

//  echo "dados de maria: " . '<br>';
//  echo "idade: " . $maria->getIdade() . ' anos ' .'<br>' . "altura: " . $maria->getAltura() . ' metros'. '<br>' ."peso: " . $maria->getPeso() . ' Kg'. '<br>';
//  $maria->andar();
//  echo '<br>';   
//  echo "dados de joao: " . '<br>';
//  echo "idade: " . $joao->getIdade() . ' anos ' .'<br>' . "altura: " . $joao->getAltura() . ' metros'. '<br>' ."peso: " . $joao->getPeso() . ' Kg'. '<br>';
//     $joao->falar();
//  echo '<br>';
//  echo "dados de jose: " . '<br>';
//  echo "idade: " . $jose->getIdade() . ' anos ' .'<br>' . "altura: " . $jose->getAltura() . ' metros'. '<br>' ."peso: " . $jose->getPeso() . ' Kg'. '<br>';
//     $jose->pular();

// $funcionario1 = new Funcionario('Maria', 25, 1000, 'Gerente');

// $funcionario1->setNome('Maria');
// echo 'nome: ' . $funcionario1->getNome();
// echo "<br>";
// $funcionario1->setSalario(1500);
// echo 'Salario: ' . $funcionario1->getSalario();
// echo "<br>";
// $funcionario1->setIdade(30);
// echo 'Idade: ' . $funcionario1->getIdade();
// echo "<br>";
// $funcionario2 = new Funcionario('João', 30, 2000, 'Analista');

// $funcionario2->setNome('João');
// echo 'nome: ' . $funcionario2->getNome();

// echo "<br>";
// $funcionario2->setSalario(2500);
// echo 'Salario: ' . $funcionario2->getSalario();
// echo "<br>";
// $funcionario2->setIdade(35);
// echo 'Idade: ' . $funcionario2->getIdade();
// echo "<br>";

// $funcionario3 = new Funcionario('José', 35, 3000, 'Programador');

// $funcionario3->setNome('José');
// echo 'nome: ' . $funcionario3->getNome();
// echo "<br>";
// $funcionario3->setSalario(3500);
// echo 'Salario: ' . $funcionario3->getSalario();
// echo "<br>";
// $funcionario3->setIdade(40);
// echo 'Idade: ' . $funcionario3->getIdade();
// echo "<br>";

$pessoa1 = new Pessoa( 'Maria', 25, 1.60, 60); 
$pessoa2 = new Pessoa( 'João', 30, 1.75, 80);
$pessoa3 = new Pessoa( 'José', 35, 1.80, 78);

$funcionario1 = new Funcionario('Gerente', 4500);
$funcionario2 = new Funcionario('Analista', 2500);
$funcionario3 = new Funcionario('Programador', 3500);

echo "Dados do funcionario 1: " . '<br>';
echo "Cargo: " . $funcionario1->getCargo() .'<br>'. "salario R$: " .  $funcionario1->getSalario() . '<br>';
$funcionario1->trabalhar();
$funcionario1->recebeAumento(500);
echo "Novo salario R$: " . $funcionario1->getSalario() . '<br>';

//aumento salarial de todos os funcionarios em 10%

$funcionario1->aumentarSalario(10);
echo "Novo salario R$: " . $funcionario1->getSalario() . '<br>';
?>