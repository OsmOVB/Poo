<?php

require_once 'Pedido.php';

class ItemCardapio {
  private int $id;
  private string $descricao;
  private float $preco;
  private int $quantidade;
  private Pedido $pedido;
  
  public function __construct(
     int $id,
     string $descricao, 
     float $preco, 
     int $quantidade, 
     Pedido $pedido
     ) {
      $this->id = $id;
      $this->descricao = $descricao;
      $this->preco = $preco;
      $this->quantidade = $quantidade;
      $this->pedido = $pedido;
  }
  
  public function getId(): int {
      return $this->id;
  }
  
  public function setId(int $id): void {
      $this->id = $id;
  }
  
  public function getDescricao(): string {
      return $this->descricao;
  }
  
  public function setDescricao(string $descricao): void {
      $this->descricao = $descricao;
  }
  
  public function getPreco(): float {
      return $this->preco;
  }
  
  public function setPreco(float $preco): void {
      $this->preco = $preco;
  }
  
  public function getQuantidade(): int {
      return $this->quantidade;
  }
  
  public function setQuantidade(int $quantidade): void {
      $this->quantidade = $quantidade;
  }
  
  public function getPedido(): Pedido {
      return $this->pedido;
  }
  
  public function setPedido(Pedido $pedido): void {
      $this->pedido = $pedido;
  }
  
  public function calculaPrecoFinal(): float {
      return $this->preco * $this->quantidade;
  }
}
