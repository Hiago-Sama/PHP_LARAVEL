<?php

namespace Projeto\Alura\Model\Funcionario;


use Projeto\Alura\Interfaces\Autenticador;

class Diretor extends Funcionario implements Autenticador
{
    public function bonificacao(): float
    {
        return $this->getSalario() * 2; // TODO: Change the autogenerated stub
    }


    public function logar(string $senha): bool
    {
      return $senha === '654321';

    }
}