<?php
/* o objetivo é mostrar a fragilidade da falta de encapsulamento*/
class Agenda {
    private $dia;
    private $mes;
    private $ano;
    private $notacao;

    public function __construct($dia, $mes, $ano, $notacao) {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
        $this->notacao = $notacao;
        $this->validaData();
    }
    
    public function anote($dia, $mes, $ano, $notacao) {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
        $this->notacao = $notacao;
        $this->validaData();
    }

    private function validaData() {
        if (($this->dia < 0) || ($this->dia > 31) || ($this->mes < 0) || ($this->mes > 12)) {
            $this->dia = 0;
            $this->mes = 0;
            $this->ano = 0;
            $this->notacao = "Anotação não inserida: data invalida";
        }    
    }

    public function mostraAnotacao() {
        echo $this->dia . "/" . $this->mes . "/" . $this->ano . " - " . $this->notacao . '<br>';
    }
}
echo '<pre>';
$agenda1 = new Agenda(12, 10, 2010, "dia das criança 1");
$agenda2 = new Agenda(7, 15, 2010, "dia da independencia ");
// $agenda1 = new Agenda();
// $agenda2 = new Agenda();

$agenda1->anote(12, 10, 2010, "dia das criança 1");
$agenda2->anote(7, 15, 2010, "dia da independencia ");

$agenda1->mostraAnotacao();
// $agenda2->mostraAnotacao();
/*atributo privado nao acessivel fora da classe*/
// $agenda2->dia = 7;
// $agenda2->mes = 15;
// $agenda2->ano = 2010;
// $agenda2->notacao = "dia da independencia ";
$agenda2->mostraAnotacao();
?>