<?php 
declare(strict_types=1);

final class Itempedido{

    public function __construct(
        private int $quantidade
        {}
    )

    public function getQuant(): int {
        return $this->$quantidade;
    }
}
