<?php
require_once 'ItemCardapio.php';
require_once 'Pedido.php';

class Massa extends ItemCardapio {
    private string $tamanho;
    private string $ingredientes;
    
    public function __construct(
        int $id,
         string $descricao,
          float $preco,
           int $quantidade,           
             string $tamanho,
              string $ingredientes,
              Pedido $pedido,
              
              ) {
        parent::__construct($id, $descricao, $preco, $quantidade, $pedido);
        $this->tamanho = $tamanho;
        $this->ingredientes = $ingredientes;
    }
    
    public function getTamanho(): string {
        return $this->tamanho;
    }
    
    public function setTamanho(string $tamanho): void {
        $this->tamanho = $tamanho;
    }
    
    public function getIngredientes(): string {
        return $this->ingredientes;
    }
    
    public function setIngredientes(string $ingredientes): void {
        $this->ingredientes = $ingredientes;
    }
    
    public function calculaPrecoFinal(): float {
        $preco = $this->getPreco();
        if ($this->tamanho === "Grande") {
            $preco += 5.00; // valor adicional do tamanho grande
        }
        return $preco;
    }
}
