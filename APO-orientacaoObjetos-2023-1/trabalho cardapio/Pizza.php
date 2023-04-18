<?php

require_once 'ItemCardapio.php';
require_once 'Pedido.php';
class Pizza extends ItemCardapio {
    private $tamanho;
    private $ingredientes;
  
    public function __construct(
      $id,
       $descricao,
        $preco,
         $quantidade,
          $tamanho,
           $ingredientes,
            Pedido $pedido) {
      parent::__construct($id, $descricao, $preco, $quantidade, $pedido);
      $this->tamanho = $tamanho;
      $this->ingredientes = $ingredientes;
  }
  
    public function getTamanho() {
      return $this->tamanho;
    }
  
    public function setTamanho($tamanho) {
      $this->tamanho = $tamanho;
    }
  
    public function getIngredientes() {
      return $this->ingredientes;
    }
  
    public function setIngredientes($ingredientes) {
      $this->ingredientes = $ingredientes;
    }
  }
  