<?php

require_once('Produto.php');

class Roupa extends Produto{
    private int $tamanho;
    /**
     * Get the value of tamanho
     */
    public function getTamanho() {
        return $this->tamanho;
    }

    /**
     * Set the value of tamanho
     */
    public function setTamanho($tamanho): self {
        $this->tamanho = $tamanho;
        return $this;
    }
}