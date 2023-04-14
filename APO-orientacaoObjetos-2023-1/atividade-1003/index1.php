<?php

class Lampada {
    private $isOn = false;
    private $power = 0;
    private $dimmer = null;

    public function __construct($power) {
        $this->power = $power;
    }

    public function turnOn() {
        $this->isOn = true;
    }

    public function turnOff() {
        $this->isOn = false;
    }

    public function isOn() {
        return $this->isOn;
    }

    public function getPower() {
        return $this->power;
    }
    
    public function connectToDimmer(Dimmer $dimmer) {
        $this->dimmer = $dimmer;
    }

    public function setIntensity($intensity) {
        if ($this->dimmer) {
            $this->dimmer->setIntensity($intensity);
        }
    }

    public function getIntensity() {
        if ($this->dimmer) {
            return $this->dimmer->getIntensity();
        }
    }
}
//cria classe dimmer
class Dimmer {
    private $intensity = 0;
    //método para alterar o valor da intensidade
    public function setIntensity($intensity) {
        $this->intensity = $intensity;
    }
    //metodo pra mostrar o valor
    public function getIntensity() {
        return $this->intensity;
    }
}

// Criar uma lâmpada com potência de 60 Watts
$Lampada = new Lampada(60);

// Conectar a lâmpada a um dispositivo de dimmer
$dimmer = new Dimmer();
$Lampada->connectToDimmer($dimmer);

// Ligar a lâmpada e definir a intensidade da luz para 50%
$Lampada->turnOn();
$Lampada->setIntensity(0.5);

// Verificar o estado atual da lâmpada e a intensidade da luz
echo "Lâmpada está ligada: " . ($Lampada->isOn() ? "sim" : "não") ."<br>\n";
echo "Potência da lâmpada: " . $Lampada->getPower() . " Watts\n"."<br>\n";;
echo "Intensidade da luz: " . $Lampada->getIntensity() ."<br>\n";
//aumentar a intensidade da luz para 80%
$Lampada->setIntensity(0.8);
echo "Intensidade da luz: " . $Lampada->getIntensity() ."<br>\n";
// Diminuir a intensidade da luz para 20%
$Lampada->setIntensity(0.2);
echo "Intensidade da luz: " . $Lampada->getIntensity() ."<br>\n";
// Desligar a lâmpada
echo "Desligar Lampada! " ."<br>\n";
$Lampada->turnOn();
echo "Lâmpada está ligada: " . ($Lampada->isOn() ? "sim" : "não") . "\n";

