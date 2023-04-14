<?php
require_once 'Produto.php';

class Estoque {
    private array $produtos = [];  
    
    
    public function adicionarProduto(Produto $produto): void {
        echo "Adicionando produto ao estoque: " . $produto->getNome() . "<br>";
        echo "Quantidade adicionada: " . $produto->getQuantidadeDisponivel() . "<br>";
        echo "Preço do produto: " . $produto->getPreco() . "<br>";
        echo "Produto adicionado com sucesso! <br> <br>";

        $this->produtos[] = $produto;
    }
    
    public function removerProduto(int $id): bool {
        foreach ($this->produtos as $key => $produto) {
            if ($produto->getId() === $id) {
                unset($this->produtos[$key]);
                return true;
            }
        }
        return false;
    }
    
    public function listarProdutos(): array {
        return $this->produtos;
    }
    
    public function getProdutoById(int $id): ?Produto {
        foreach ($this->produtos as $produto) {
            if ($produto->getId() === $id) {
                return $produto;
            }
        }
        return null;
    }
    
    public function getQuantidadeDisponivel(int $id): ?int {
        $produto = $this->getProdutoById($id);
        if ($produto !== null) {
            return $produto->getQuantidadeDisponivel();
        }
        return null;
    }
}
