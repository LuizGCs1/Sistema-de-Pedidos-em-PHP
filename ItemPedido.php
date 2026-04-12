<?php
declare(strict_types=1);

class ItemPedido {
    

    public function __construct(
        private Produto $produto,
        private int $quantidade
    ){}

    public function getProduto(): Produto {
        return $this->produto;
    }

    public function getQuantidade(): int {
        return $this->quantidade;
    }

    public function getSubtotal(): float {
        return $this->produto->getPreco() * $this->quantidade;
    }
}