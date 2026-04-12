<?php
declare(strict_types=1);

final class Pedido
{

private array $itens = [];

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

    public function adicionarItens(Produto $produto, int $quantidade): void
    {
        $itens[] = new ItemPedido($produto, $quantidade);
    }
}