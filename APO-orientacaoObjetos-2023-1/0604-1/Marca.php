<?php

class Marca
{
    private int $id;
    private string $nome;
    private string $representante;

    public function __construct(int $id, string $nome, string $representante)
    {
        $this->nome = $nome;
        $this->representante = $representante;
    }

    public function getNome(): string
    {
        return $this->nome;
    }


    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getRepresentante(): string
    {
        return $this->representante;
    }

    public function setRepresentante(string $representante): self
    {
        $this->representante = $representante;
        return $this;
    }
}
