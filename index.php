<?php
declare(strict_types=1);

require_once 'Cliente.php';
require_once 'Produto.php';
require_once 'ItemPedido.php';
require_once 'Pedido.php';

$cliente = new Cliente("João", "joao@gmail.com");
echo "Cliente: " . $cliente->getNome() . PHP_EOL;
echo "Email: " . $cliente->getEmail() . PHP_EOL;

$produto = new Produto("Refrigerante", 9.50);
echo "Produto: " . $produto->getNome() . PHP_EOL;
echo "Preço: R$ " . number_format($produto->getPreco(), 2, ',', '.') . PHP_EOL;


$pedido = new Pedido(1234, "12/04/2026");
echo "Pedido: " . $pedido->getNumero() . PHP_EOL;
echo "Data: " . $pedido->getData() . PHP_EOL;

$pedido->adicionarItens($produto, 6);

$item = new ItemPedido($produto, 6);
echo "Total: R$ " . number_format($item->getSubtotal(), 2, ',', '.') . PHP_EOL; 