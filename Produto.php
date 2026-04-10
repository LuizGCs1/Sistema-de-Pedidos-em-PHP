<?php 

declare(strict_types=1);

final class Produto{

    public function __construct(
        private string $nomeprod,
        private float $preco
    ){}

    public function setNomeprod(){
        return $this->nomeprod;
    }

    public function setPreco(){
        return $this->preco;
    }
}