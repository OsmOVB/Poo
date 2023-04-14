<?php

class Marca
{
    private string $nome;
    private string $representante;

    public function __construct(
            string $nome, 
            string $representante
        )
    {
        $this->nome = $nome;
        $this->representante = $representante;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function getRepresentante(): string {
        return $this->representante;
    }
}