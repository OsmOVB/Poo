
<?php

class Produto {
  private int $id;
  private string $nome;
  private float $preco;
  private int $quantidadeTotal;
  private int $estoqueReservado;
  public static int $numeroTotalProdutos = 0;

  public function __construct(int $id, string $nome, float $preco, int $quantidadeTotal, int $estoqueReservado = 0)
  {
    $this->id = $id;
    $this->nome = $nome;
    $this->preco = $preco;
    $this->quantidadeTotal = $quantidadeTotal;
    $this->estoqueReservado = $estoqueReservado;
    self::$numeroTotalProdutos++;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getPreco(): float
  {
    return $this->preco;
  }

  public function getQuantidadeTotal(): int
  {
    return $this->quantidadeTotal;
  }

  public function getEstoqueReservado(): int
  {
    return $this->estoqueReservado;
  }

  public function getQuantidadeDisponivel(): int
  {
    return $this->quantidadeTotal - $this->estoqueReservado;
  }

  public function adicionarQuantidade(int $quantidade): bool
  {
    if ($quantidade >= $this->estoqueReservado) {
      $this->quantidadeTotal += $quantidade;
      return true;
    }
    return false;
  }

  public function removerQuantidade(int $quantidade): bool
  {
    if ($quantidade <= $this->quantidadeTotal - $this->estoqueReservado) {
      $this->quantidadeTotal -= $quantidade;
      return true;
    }
    return false;
  }

  public static function getNumeroTotalProdutos(): int
  {
    return self::$numeroTotalProdutos;
  }

  public function reservarProduto(int $quantidade): bool
{
    if ($quantidade <= $this->getQuantidadeDisponivel()) {
        $this->estoqueReservado += $quantidade;
        return true;
    }
    return false;
}

public function liberarProduto(int $quantidade): bool
{
    if ($quantidade <= $this->estoqueReservado) {
        $this->estoqueReservado -= $quantidade;
        return true;
    }
    return false;
}
}
