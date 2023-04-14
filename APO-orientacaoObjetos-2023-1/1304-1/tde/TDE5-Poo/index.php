<?php
require_once('UnidadeMedida.php');
require_once('Produto.php');
require_once('Computador.php');
require_once('Mouse.php');
require_once('Estoque.php');

$produto1 = new Computador();
$produto1->setId(1);
$produto1->setNome('Computador Acer i7');
$produto1->setPreco(3500.66);
$produto1->setMarca(new Marca('Acer','Bruno Caldenhas'));
$produto1->setQuantidade(10);
$produto1->setUnidadeMedida(UnidadeMedida::Unidade);
$produto1->setMemoriaRam('15 Gb');
$produto1->setProcessador('Intel i7');
$produto1->setPlacaDeVideo('Nvidia X77');


$produto2 = new Computador();
$produto2->setNome('Computador Dell i7');
$produto2->setPreco(3500.66);
$produto2->setId(2);
$produto2->setMarca(new Marca('Dell','João Caldenhas'));
$produto2->setQuantidade(10);
$produto2->setUnidadeMedida(UnidadeMedida::Unidade);
$produto2->setMemoriaRam('15 Gb');
$produto2->setProcessador('Intel i7');
$produto2->setPlacaDeVideo('Nvidia X77');


$produto3 = new Mouse();
$produto3->setNome('Mouse Gamer');
$produto3->setPreco(8500.66);
$produto3->setId(3);
$produto3->setMarca(new Marca('Razer','Milton Valter'));
$produto3->setQuantidade(100);
$produto3->setUnidadeMedida(UnidadeMedida::Unidade);
$produto3->setErgonomico(false);
$produto3->setDpi(3000);

Estoque::adicionarAoEstoque($produto1);
Estoque::adicionarAoEstoque($produto2);
Estoque::adicionarAoEstoque($produto3);

echo "Computadores: ";
echo Estoque::getEstoque(Computador::class);
echo "\n Mouses: ";
echo Estoque::getEstoque(Mouse::class);
