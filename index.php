<?php

declare(strict_types=1);

require_once 'Cliente.php';
require_once 'Produto.php';
require_once 'Pedido.php';

$cliente01 = new Cliente("João", "joaosilva@gmail.com");
echo "Cliente: " .$cliente01->getNome() .PHP_EOL;
echo "Email: " .$cliente01->getEmail() .PHP_EOL;

$produto01 = new Produto("Farinha", 10.00);
echo "Produto: " .$produto01->getNomeprod() .PHP_EOL;
echo "Preço: R$ " .number_format($produto01->getPreco(), 2, ",",".").PHP_EOL;

$pedido01 = new Pedido("12345", "10/04/2026");
echo "Pedido ID: " .$pedido01->getPedidoid() .PHP_EOL;
echo "Data do Pedido: " .$pedido01->getData() .PHP_EOL;


