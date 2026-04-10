<?php 

declare(strict_types=1);

final class Cliente{
    
    public function __construct(
        private string $nome,
        private string $email 
    ){}
}