<?php

class Carro {
    private $marca;
    private $modelo;
    private $ano;
    private $cor;
    private $preco;

    public function __construct($marca, $modelo, $ano, $cor, $preco) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->preco = $preco;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setMarca($marca) {
        if ($this->validaMarca($marca)) {
            $this->marca = $marca;
        } else {
            echo "Marca inválida";
        }       
    }

    public function setModelo($modelo) {
        if($this->validaModelo($modelo)) {
            $this->modelo = $modelo;
        } else {
            echo "Modelo inválido";
        }       
    }

    public function setAno($ano) {
        if($this->validaAno($ano)) {
            $this->ano = $ano;
        } else {
            echo "Ano inválido";
        }       
    }

    public function setCor($cor) {
        if($this->validaCor($cor)) {
            $this->cor = $cor;
        } else {
            echo "Cor inválida";
        }      
    }

    public function setPreco($preco) {
       if ($this->validaPreco($preco)) {
           $this->preco = $preco;
       } else {
           echo "Preço inválido";
       }
    }

    public function validaMarca($marca) {
        if (is_string($marca)) {
            return true;
        } else {
            return false;
        }
    }

    public function validaModelo($modelo) {
        if (is_string($modelo)) {
            return true;
        } else {
            return false;
        }
    }

    public function validaAno($ano) {
        if (is_int($ano)) {
            return true;
        } else {
            return false;
        }
    }

    public function validaCor($cor) {
        if (is_string($cor)) {
            return true;
        } else {
            return false;
        }
    }

    public function validaPreco($preco) {
        if (is_float($preco) || is_int($preco)) {
            return true;
        } else {
            return false;
        }
    }

    public function exibeDetalhes() {
        echo  "<br>";
        echo "Detalhes do carro: <br>";
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Ano: " . $this->ano . "<br>";
        echo "Cor: " . $this->cor . "<br>";
        echo "Preço: " . $this->preco . "<br>";
        echo  "<br>";
    }
}

 $carro1 = new Carro("Honda", "Civic", 2023, "Azul", 125000 );
 $carro2 = new Carro("Corolla", "Toyota", 2022, "Prata", 123000 );
 $carro3 = new Carro("Ford", "Focus", 2021, "Vermelho", 91000 );

 $carro1->exibeDetalhes();
 $carro2->exibeDetalhes();
 $carro3->exibeDetalhes(); 

 echo "Alterando os atributos da instancia de carro <br>";

 $carro2->setModelo("Corolla Cross");
 $carro1->setCor("Preto");
 $carro3->setPreco("a");

 $carro1->exibeDetalhes();
 $carro2->exibeDetalhes();
 $carro3->exibeDetalhes();

?>

<!-- Ficou bom, mas seus métodos não fizeram a validação. Inclusive faltou chamar no construtor os métodos de validação.


Exemplo:



public function __construct($marca, $modelo, $ano, $cor, $preco) {

        $this->setMarca($marca);

        $this->setModelo($modelo);

        $this->setAno($ano);

        $this->setCor($cor);

        $this->setPreco($preco);

    }



    public function setMarca($marca) {

        //if ($marca != "") 

        if (!empty($marca)) {

            $this->marca = $marca;

        } else {

            echo "Erro: A marca não pode ser vazia.<br>";

        }

    }



    public function getMarca() {

        return $this->marca;

    }



    public function setModelo($modelo) {

        //if ($modelo != "")

        if (!empty($modelo)) {

            $this->modelo = $modelo;

        } else {

            echo "Erro: O modelo não pode ser vazio.<br>";

        }

    }



    public function getModelo() {

        return $this->modelo;

    }



    public function setAno($ano) {

        //if ($ano >= 1900 && $ano <= 2023)

        if ($ano >= 1900 && $ano <= date("Y")) {

            $this->ano = $ano;

        } else {

            echo "Erro: O ano deve ser entre 1900 e " . date("Y") . ".<br>";

        }

  } -->