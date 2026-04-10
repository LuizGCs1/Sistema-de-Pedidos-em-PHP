<?php 
class Produto{

    public function __construct(
        private string $nomeprod,
        private float $preco
    ){}
}