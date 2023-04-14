<?php

class Exemplo {
    public static $propriedade_estatica = " Isso é uma propriedade estática. ";
    public static function metodo_estatico() {
        echo self::$propriedade_estatica;
        echo "<br>";
        echo " Isso é um método estático. ";
    }
}

echo "<br> exemplo 1 <br>";
echo "<br>";
// acessando propriedade estática
echo Exemplo::$propriedade_estatica;
// acessando método estático
echo "<br>";

Exemplo::metodo_estatico();
echo "<br>";
echo "<br>";


class Exemplo2 {
    public static $propriedade_estatica = " Isso é uma propriedade estática. ";
    public static function metodo_estatico() {
        echo self::$propriedade_estatica;
        echo "<br>";
       
    }
}

echo "<br> exemplo 2 <br> ";
//chamar método estático que acessa uma propriedade estática usando self
Exemplo2::metodo_estatico();// imprime " Isso é uma propriedade estática. "

class Carro{
    public static $rodas = 4;
    public static function getRodas(){
       return self::$rodas;
    }
}

echo "<br> exemplo 3 <br>";
echo "O carro possui: " . Carro::$rodas . " rodas." . "<br>";// Acesso a propriedade estática
echo "O carro possui: " . Carro::getRodas() . " rodas." . "<br>";// Acesso ao método estático
echo "<br>";

 
class Pessoa {
    private static $totalPessoas = 0;
    private $email;
    private $nome;

    public function __construct($nome , $email) {
        $this->setNome($nome);
        $this->setEmail($email);
        self::$totalPessoas++;
    }

    public static function getTotalPessoas() {
        return self::$totalPessoas;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setNome($nome) {
       if(!empty($nome)){
           $this->nome = $nome;
       } else {
        echo "Nome não pode ser vazio";
       }
    }

    public function setEmail($email) {
        if(!empty($email)){
            $this->email = $email;
        } else {
            echo "Email não pode ser vazio";
        }
    }

    public function exibirDetalhes(){
        echo "<br>";
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Email: " . $this->getEmail() . "<br>";
        echo "Total de pessoas: " . self::getTotalPessoas() . "<br>";
        echo "<br>";
    }

}

echo "<br><strong>Exemplo 4</strong><br>";
$pessoa1 = new Pessoa("João", "joao@email.com");
$pessoa1->exibirDetalhes();


$pessoa2 = new Pessoa("Maria", "maria@email.com");
$pessoa2->exibirDetalhes();
$pessoa3 = new Pessoa("José",  "jose@email.com");
$pessoa3->exibirDetalhes();

$pessoa4 = new Pessoa("", "mingau@email");
$pessoa4->exibirDetalhes();

$pessoa1->setNome("");

$pessoa1->exibirDetalhes();

echo "Total de pessoas: " . Pessoa::getTotalPessoas() . "<br>";


