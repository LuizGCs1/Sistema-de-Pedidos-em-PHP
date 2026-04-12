<?php 

declare(strict_types=1);

final class Produto{

    public function __construct(
        private string $nomeprod,
        private float $preco
    ){}

    public function getNomeprod(): string {
        return $this->nomeprod;
    }

    public function getPreco(): float {
        return $this->preco;
    }
}
