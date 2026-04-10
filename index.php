<?php

declare(strict_types=1);

require_once 'Cliente.php';
require_once 'Produto.php';

$cliente01 = new Cliente("João", "joaosilva@gmail.com");
echo $cliente->getCliente() .PHP_EOL;
echo $cliente->setCliente() .PHP_EOL;

$produto = new Produto("Farinha", 10.00);
echo $produto->getProduto() .PHP_EOL;
echo $produto->getProduto() .PHP_EOL;


