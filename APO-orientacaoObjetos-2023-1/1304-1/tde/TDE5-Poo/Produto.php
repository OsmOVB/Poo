<?php
require_once('UnidadeMedida.php');
require_once('Marca.php');
class Produto 
{  
    private int $id;
    private string $nome;
    private float $preco;
    private Marca $marca;
    private float $quantidade;
    private UnidadeMedida $unidadeMedida;
    
    public function setId(int $id){
        $this->id = $id;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setPreco(float $preco){
        $this->preco = $preco;
    }

    public function setMarca(Marca $marca){
        $this->marca = $marca;
    }

    public function setQuantidade(float $quantidade){
        $this->quantidade = $quantidade;
    }

    public function setUnidadeMedida(UnidadeMedida $unidadeMedida){
        $this->unidadeMedida = $unidadeMedida;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function getMarca(): Marca {
        return $this->marca;
    }

    public function getQuantidade(): float {
        return $this->quantidade;
    }

    public function getUnidadeMedida(): UnidadeMedida {
        return $this->unidadeMedida;
    }

    
}