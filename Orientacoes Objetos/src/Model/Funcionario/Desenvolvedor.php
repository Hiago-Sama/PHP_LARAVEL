<?php


namespace Projeto\Alura\Model\Funcionario;


use Projeto\Alura\Interfaces\Autenticador;

class Desenvolvedor extends Funcionario implements Autenticador
{
    public function nivelUp()
    {
        $this->aumento($this->getSalario() * 0.75);
    }

    public function bonificacao(): float
    {
        return 500.0;
    }

    public function logar(string $senha): bool
    {

    }
}