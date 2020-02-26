<?php


namespace Projeto\Alura\Model\Funcionario;


use Projeto\Alura\Interfaces\Autenticador;

class Gerente extends Funcionario implements Autenticador
{

    public function bonificacao():float
    {
        return $this -> getSalario();
    }

    public function logar(string $senha): bool
    {
        return $senha === '123456';
    }
}