<?php

require_once 'Marca.php';
require_once 'UnidadedeMedida.php';
require_once 'Estoque.php';
require_once 'Produto.php';
require_once 'Computador.php';





$produto1 = new Computador(1, 'Computador', 1000.00, new Marca(1, 'Dell', 'João'), new Estoque(), 10, UnidadedeMedida::Unidade);

$produto1->setProcessador('Intel Core i7');

$produto1->setMemoriaRam('16GB');

$produto1->setPlacadeVideo('Nvidia GTX 1080');