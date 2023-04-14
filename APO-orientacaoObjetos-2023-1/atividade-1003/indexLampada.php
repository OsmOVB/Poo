<?php

class Lampada {
    private $potencia;
    private $estado;
    private $intensidade;

    public function __construct($potencia) {
        $this->potencia = $potencia;
        $this->estado = false;
        $this->intensidade = 100;
    }

    public function ligar(){
        $this->estado = true;
    }
    public function desligar(){
        $this->estado = false;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getPotencia(){
        return $this->potencia;
    }
    public function setPotencia(){
        $this->potencia = $potencia;
    }
    public function getIntensidade(){
        return $this->intensidade;
    }
    public function setIntensidade($intensidade){
        $this->intensidade = $intensidade;
    }    
}
class DispositivoDimmer{
    public function aumentarIntensidade($lampada){
        $intensidade = $lampada->getIntensidade() + 10;
        if($intensidade > 100){
            $intensidade = 100;
        }
        $lampada->setIntensidade($intensidade);
    }
    public function diminuirIntensidade($lampada){
        $intensidade = $lampada->getIntensidade() - 10;
        if($intensidade < 0 ){
            $intensidade = 0;
        }
        $lampada->setIntensidade($intensidade);
    }
    public function getIntensidade($lampada){
        return $lampada->getIntensidade();
    }
}

$lampada = new Lampada(60); //cria classe lampada com 60w
$dimmer = new DispositivoDimmer(); // cria a classe Dispositivo dimmer

$dimmer->aumentarIntensidade($lampada); //aumenta a intensidade em 10%
echo "Intensidade da lampada: ". $dimmer->getIntensidade($lampada) . "<br>";
$dimmer->diminuirIntensidade($lampada); //diminuir a intensidade em 10%
$dimmer->diminuirIntensidade($lampada); //diminuir a intensidade em 10%
echo "Intensidade da lampada: ". $dimmer->getIntensidade($lampada) . "<br>";

$dimmer->diminuirIntensidade($lampada); //diminuir a intensidade em 10%
echo "Intensidade da lampada: ". $dimmer->getIntensidade($lampada) . "<br>";
$dimmer->diminuirIntensidade($lampada); //diminuir a intensidade em 10%
echo "Intensidade da lampada: ". $dimmer->getIntensidade($lampada) . "<br>";


$intensidade = $dimmer->getIntensidade($lampada); // obtem a intesidade atual da lampada
echo "Intensidade da lampada: ". $intensidade . "<br>";


// $lampada1 = new Lampada(60);
// $lampada2 = new Lampada(100);

echo $lampada->getEstado() ? 'Ligada' : 'Desligada';