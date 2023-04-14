<?php

 class Carro {
    public string $nome;
    public static string $cor;
    public static int $quantidade;


    public function getNome(): string {
        return $this->nome;
    }


    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    public function getCor(): string {
        return $this->cor;
    }


    public function setCor(string $cor): self {
        self::$cor = $cor;
        return $this;
    }
    public function setQuantidade(int $quantidade): self {
        self::$quantidade = $quantidade;
        return $this;
    }
 }

    $carro = new Carro();

    $carro->nome = 'Corcel';
    $carro->cor = 'Verde Musgo';

    $carro2 = new Carro();
    $carro2->nome = 'Fusca';
    $carro2->cor = 'Azul';

    Carro::setCor('Amarelo Ferrugem');
    Carro::setCor('Preto Fosco');

    echo "$carro->nome \n";
    echo "$carro->cor \n";

    echo Carro::$Cor
