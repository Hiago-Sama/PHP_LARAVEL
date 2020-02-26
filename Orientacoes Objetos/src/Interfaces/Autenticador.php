<?php


namespace Projeto\Alura\Interfaces;

interface Autenticador
{

    public function logar(string $senha): bool;
}