<?php
/*Elabore um modelo de especificação orientada a objetos para uma lâmpada comum,
 que possua um interruptor para liga/desliga e uma potência em Watts.
A lâmpada deve ser capaz de ser ligada e desligada, e deve retornar
o seu estado atual (ligada ou desligada) e sua potência em Watts.
Além disso, a lâmpada deve ser capaz de ser conectada a um dispositivo de dimmer,
que é responsável por controlar a intensidade da luz emitida pela lâmpada.
O dispositivo de dimmer deve ser capaz de aumentar ou diminuir a intensidade
da luz emitida pela lâmpada, e deve retornar a sua intensidade atual.*/
class Lampada{

    private $interruptor; //ligado ou desligado
    private $potencia;
    private $intensidade;

    public function __construct($interruptor, $potencia){
        $this->interruptor = $interruptor;
        $this->potencia = $potencia;
        $this->intensidade = 0;
    } 

    public function ligaDesliga(bool $estado){
       $this->interruptor = $estado;
    }
    public function setPotencia($potencia){
        $this->potencia = $potencia;
    }
    public function getPotencia(){
        return $this->potencia;
    }
    public function getInterruptor(){
        return $this->interruptor;
    }

    public function setDimmer($intensidade){
        $this->intensidade = $intensidade;
    }
    public function getDimmer(){
        return $this->intensidade;
    }


}

$lampada = new Lampada(true, 100);
//$lampada->ligaDesliga(true);
//$lampada->setPotencia(600);

echo $lampada->getInterruptor() ? 'Ligado' : 'Desligada';
echo "<br>";

echo 'Potencia: '. $lampada->getPotencia();

echo "<br>";
echo 'Dimmer: '. $lampada->getDimmer();

echo "<br>";
echo 'Dimmer altera: 50 '. $lampada->setDimmer(50);

echo "<br>";
echo 'Dimmer: '. $lampada->getDimmer();