<?php


namespace Projeto\Alura\Service;


use Projeto\Alura\Model\Funcionario\Funcionario;

class BonificacaoCalculo
{

    private $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->bonificacao();
    }


    public function getTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}