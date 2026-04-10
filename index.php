<?php

declare(strict_types=1);

require_once 'Cliente.php';
require_once 'Produto.php';

$cliente01 = new Cliente("João", "joaosilva@gmail.com");
echo $cliente01->getCliente() .PHP_EOL;
echo $cliente01->setCliente() .PHP_EOL;

$produto01 = new Produto("Farinha", 10.00);
echo $produto01->getProduto() .PHP_EOL;
echo $produto01->getProduto() .PHP_EOL;


