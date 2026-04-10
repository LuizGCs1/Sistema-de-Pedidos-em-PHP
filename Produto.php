<?php 

declare(strict_types=1);

final class Produto{

    public function __construct(
        private string $nomeprod,
        private float $preco
    ){}
}