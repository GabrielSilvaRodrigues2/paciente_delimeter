<?php

namespace src\Models\Entity;

class Usuario
{
    private int $id;
    private string $nome;
    private string $email;
    private ?string $senha;

    public function __construct(int $id, string $nome, string $email, ?string $senha = null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getSenha(): ?string
    {
        return $this->senha;
    }

    public function setSenha(?string $senha): void
    {
        $this->senha = $senha;
    }
}