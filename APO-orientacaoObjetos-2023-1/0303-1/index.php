<?php
//definiçao de variaveis

$lampado_estado = false;
$lampada_potencia = 60;

//funcao para ligar a lampada

function ligar_lampada(){
    global $lampada_estado;
    $lampada_estado = true;
}

//funcao para desligar a lampada

function desligar_lampada(){
    global $lampada_estado;
    $lampada_estado = false;
}


//funcao para verificar a potencia da lampada

function verificar_potencia(){
    global $lampada_potencia;
    echo "A potencia da lampada é de $lampada_potencia watts";
}

//funcao para aumentar a potencia da lampada

function aumentar_potencia(){
    global $lampada_potencia;
    $lampada_potencia += 20;
}

// funcao para diminuir a potencia da lampada

function diminuir_potencia(){
    global $lampada_potencia;
    $lampada_potencia -= 20;
}


//testando as funcoes

echo "Estado atual da lampada: " .($lampada_estado ? "ligada" : "desligada") ."<br>";
echo "Potencia atual da lampada: " .$lampada_potencia ." watts<br>";

//chamada das funcoes

ligar_lampada();

aumentar_potencia();

echo "Estado atual da lampada: " . ($lampada_estado ? "ligada" : "desligada") . "<br>";
echo "potencia atual da lampada é de: " .$lampada_potencia ." watts<br>";

diminuir_potencia();

echo "Estado atual da lampada: " . ($lampada_estado ? "ligada" : "desligada") . "<br>";
echo "potencia atual da lampada é de: " .$lampada_potencia ." watts<br>";

verificar_lampada();

desligar_lampada();

?>

<?Php

//declaracao de variaveis
$olhos = "azul";
$cabelo = "castanho";
$usa_oculos = true;
$vestimenta = "calça jeans e blazer";
$segura_lampada = true;

// impressao das informaçoes

echo "Essa pessoa possui " . $olhos . ", cabelo " . $cabelo . " e ";
if($usa_oculos){
    echo "Usa Oculos <br>";
} else {
    echo " não usa oculos. <br>";
}

echo "Está usando " . $vestimenta . " e ";
if($segura_lampada){
    echo "Está segurando uma lampada. <br>";
} else {
    echo "Não está segurando nada. <br>";
}
?>

<?php

class Pessoa {

    private $olhos;
    private $cabelo;
    private $roupa;
    private $usaOculos;
    private $objetoMao;

    public function __construct($olhos, $cabelo, $roupa, $usaOculos, $objetoMao){
        $this->olhos = $olhos;
        $this->cabelo= $cabelo;
        $this->roupa = $roupa;
        $this->usaOculos= $usaOculos;
        $this->objetoMao = $objetoMao;
    }

    public function getOlhos(){
        return $this->olhos;
    }

    public function getCabelo(){
        return $this->cabelo;
    }

    public function usaOculos(){
        return $this->usaOculos;
    }

    public function getRoupa(){
        return $this->roupa;
    }

    public function getObjetoMao(){
        return $this->obejetoMAo;
    }

}

class Objeto{

    private $tipo;

    public function __construct($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo(){
        return $this->tipo;
    }

}

$pessoa = new Pessoa('azul', 'castanho', 'calça jeans e blazer',true,  new Objeto('lampada') );

echo " a pessoa tem olhos " . $pessoa->getOlhos() . "cabelo " . $pessoa.getCabelo() . "e usa oculos? " . ($pessoa->getUsaOculos() ? "sim " : "não") . ". <br>";

echo " esta usando " . $pessoa->getRoupa() . " . ";

echo "na mão, esta segurando uma  " . $pessoa->getObjetoMao()->getTipo() .  ". ";


?>