<?php
require_once 'Produto.php';
require_once 'Estoque.php';
require_once 'Roupa.php';

// Criar alguns produtos
$produto1 = new Produto(1, 'Camiseta', 29.99, 100);
$produto2 = new Produto(2, 'Calça', 49.99, 50);
$produto3 = new Produto(3, 'Tênis', 99.99, 20);
$roupa1 = new Roupa(4,'camisag', 10, 15);
$roupa1->setTamanho(38);

// Adicionar produtos ao estoque
$estoque = new Estoque();

$estoque->adicionarProduto($produto1);
$estoque->adicionarProduto($produto2);
$estoque->adicionarProduto($produto3);
$estoque->adicionarProduto($roupa1);
// Listar todos os produtos do estoque
$produtos = $estoque->listarProdutos();
echo "<hrProdutos no estoque: <br>";
foreach ($produtos as $produto) {
    echo "Produto: " .
        $produto->getNome() .
        "<br> - Quantidade disponível: " .
        $produto->getQuantidadeDisponivel() .
        "<br> - Estoque reservado: " .
        $produto->getEstoqueReservado() .
        "<br> <br>";
}

// Reservar alguns produtos no estoque
$produto1->reservarProduto(10);
$produto2->reservarProduto(20);

// Verificar a quantidade disponível de um produto específico
$quantidadeDisponivel = $estoque->getQuantidadeDisponivel(1);
if ($quantidadeDisponivel !== null) {
    echo "Quantidade disponível do produto  : " . $quantidadeDisponivel . "<br>";
}

// Liberar alguns produtos reservados no estoque
$produto1->liberarProduto(5);

// Remover um produto do estoque
$estoque->removerProduto(3
);

// Listar novamente todos os produtos do estoque
$produtos = $estoque->listarProdutos();
foreach ($produtos as $produto) {
    echo "Produto: " .
        $produto->getNome() .
        " - Quantidade disponível: " .
        $produto->getQuantidadeDisponivel() .
        " - Estoque reservado: " .
        $produto->getEstoqueReservado() . "<br>";

}


echo 'Numero total de produtos: ' .  Produto::$numeroTotalProdutos . '<br>';