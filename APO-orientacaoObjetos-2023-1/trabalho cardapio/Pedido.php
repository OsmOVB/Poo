<?php

class Pedido {
  private $idPedido;
  private $precoTotal;
  private static $contadorPedidos = 0;

  public function __construct() {
      $this->idPedido = ++self::$contadorPedidos;
      $this->precoTotal = 0;
  }

  public function getIdPedido() {
      return $this->idPedido;
  }

  public function getPrecoTotal() {
      return $this->precoTotal;
  }

  public function adicionarItem(ItemCardapio $item) {
    if ($item instanceof ItemCardapio) {     
        $this->precoTotal += $item->calculaPrecoFinal();
    }
  }

  public function calculaPrecoTotal() {
      return $this->precoTotal;
  }
}
