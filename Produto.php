<?php 
declare(strict_types=1);

final class Produto{

    public function __construct(
        private string $nome,
        private float $preco
    ){}

    public function getNome(): string {
        return $this->nome;
    }

    public function getPreco(): float {
        return $this->preco;
    }
}