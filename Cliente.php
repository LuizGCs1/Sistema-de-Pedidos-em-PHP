<?php 

declare(strict_types=1);

final class Cliente{
    
    public function __construct(
        private string $nome,
        private string $email 
    ){}

    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }
}

