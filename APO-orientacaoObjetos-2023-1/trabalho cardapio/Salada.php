<?php
require_once 'ItemCardapio.php';

class Salada extends ItemCardapio {
    private string $ingredientesPrincipais;
    private bool $incluirProteina;
    
    public function __construct(
        $id,
        $descricao,
        $preco,
        $quantidade,
        $pedido,
        $ingredientesPrincipais
        ) {
        parent::__construct(
            $id, 
            $descricao, 
            $preco, 
            $quantidade, 
            $pedido
        );
        $this->ingredientesPrincipais = $ingredientesPrincipais;
      }
    
    public function getIngredientesPrincipais(): string {
        return $this->ingredientesPrincipais;
    }
    
    public function setIngredientesPrincipais(string $ingredientesPrincipais): void {
        $this->ingredientesPrincipais = $ingredientesPrincipais;
    }
    
    public function isIncluirProteina(): bool {
        return $this->incluirProteina;
    }
    
    public function setIncluirProteina(bool $incluirProteina): void {
        $this->incluirProteina = $incluirProteina;
    }
    
    public function calculaPrecoFinal(): float {
        $preco = $this->getPreco();
        if ($this->incluirProteina) {
            $preco += 3.50; // valor adicional da proteína
        }
        return $preco;
    }

}
