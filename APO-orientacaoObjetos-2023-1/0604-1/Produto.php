<?php
require_once 'Marca.php';
require_once 'UnidadedeMedida.php';
require_once 'Estoque.php';

class Produto {
    private int $id;
    private string $nome;
    private float $preco;
    private Marca $marca;
    private Estoque $estoque;
    private int $quantidade;  
    private UnidadedeMedida $unidadedeMedida;
    
    
    public function __construct(int $id, string $nome, float $preco, Marca $marca, Estoque $estoque, int $quantidade, UnidadedeMedida $unidadedeMedida) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->marca = $marca;
        $this->estoque = $estoque;
        $this->quantidade = $quantidade;
        $this->unidadedeMedida = $unidadedeMedida;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function setPreco(float $preco): self {
        $this->preco = $preco;
        return $this;
    }

    public function getMarca(): Marca {
        return $this->marca;
    }

    public function setMarca(Marca $marca): self {
        $this->marca = $marca;
        return $this;
    }

    public function getEstoque(): Estoque {
        return $this->estoque;
    }

    public function setEstoque(Estoque $estoque): self {
        $this->estoque = $estoque;
        return $this;
    }

    public function getQuantidade(): int {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade): self {
        $this->quantidade = $quantidade;
        return $this;
    }

    public function getUnidadedeMedida(): UnidadedeMedida {
        return $this->unidadedeMedida;
    }

    public function setUnidadedeMedida(UnidadedeMedida $unidadedeMedida): self {
        $this->unidadedeMedida = $unidadedeMedida;
        return $this;
    }


}



