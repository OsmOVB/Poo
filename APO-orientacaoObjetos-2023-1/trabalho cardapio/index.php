<?php

// Importação das classes
require_once('Pedido.php');
require_once('ItemCardapio.php');
require_once('Salada.php');
require_once('Massa.php');
require_once('Pizza.php');

// Criação de um novo pedido
$pedido1 = new Pedido(1);

// Criação de itens de cardápio para adicionar ao pedido
$pizza1 = new Pizza(1, "Pizza de Margherita", 30, 5, 'grande',"molho, queijo, manjericão", $pedido1);
$massa1 = new Massa(2, "Espaguete à bolonhesa", 25, 10, 'media',"espaguete, molho à bolonhesa", $pedido1);
$saladaCaesar = new Salada(3, "Salada Caesar", 20,3,  $pedido1,"Alface, croutons, queijo parmesão" );



// Adição dos itens ao pedido
$pedido1->adicionarItem($pizza1);
$pedido1->adicionarItem($massa1);
$pedido1->adicionarItem($salada1);

// Impressão do pedido
echo "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
echo "Pedido Número : " . $pedido1->getIdPedido() . "\n";
echo "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
foreach ($pedido1->getItens() as $item) {
    echo "Incluído Pedido item: " . $item->getIdItem() . "\n";
    echo "Descrição do Pedido: " . $item->getDescricao() . "\n";
    echo "Valor do item: " . $item->getPreco() . "\n";  
    if ($item instanceof Salada) {
        echo "Ingred. Principais: " . $item->getIngredientesPrincipais() . "\n";
    } else {
        echo "Ingredientes : " . $item->getIngredientes() . "\n";
    }
    echo "-----------------//-----//-------------------\n";
}
echo "-----------------------------------------------\n";
echo "Preço total do pedido: $" . $pedido1->calculaPrecoTotal() . "\n";
echo "-----------------------------------------------\n";


