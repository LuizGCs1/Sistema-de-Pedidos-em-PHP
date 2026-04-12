<?php
declare(strict_types=1);

final class Pedido
{

  public function __construct(
    private int $numero,
    private string $data
){}

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getData(): string
    {
        return $this->data;
    }
}