<?php

namespace Projeto\Alura\Model\Funcionario;
use Projeto\Alura\Model\CPF;
use Projeto\Alura\Model\Pessoa;

abstract class Funcionario extends Pessoa
{


    private $salario;


    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::_constructor($nome, $cpf);
        $this->salario = $salario;

    }


    public function aumento(float $valorAumento)
    {
        if ($valorAumento < 0) {
            echo "Valor deve ser positivo para aumento...";
            return;
        }

        $this->salario += $valorAumento;
        echo $this->salario . PHP_EOL;

    }


    public function getSalario(): float
    {
        return $this->salario;
    }

    abstract  public function bonificacao(): float;

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
}