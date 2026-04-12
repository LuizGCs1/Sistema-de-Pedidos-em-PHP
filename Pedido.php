<?php
declare(strict_types=1);
final class Pedido
{
    public function __construct(
        private string $pedidoid,
        private string $data
    ) {
    }

    public function getPedidoid(): string
    {
        return $this->pedidoid;
    }   

    public function getData(): string
    {
        return $this->data;
    }
}
