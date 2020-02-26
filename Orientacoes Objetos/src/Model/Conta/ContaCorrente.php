<?php


namespace Projeto\Alura\Model\Conta;


class ContaCorrente extends Conta
{

    protected function percentTarifa(): float
    {
        return 0.05;
    }

    public function transfer(Conta $account,float $valueTransfer): void
    {
        if ($valueTransfer > $this->balance)
        {
            echo "Valor indisponível para transferência";
        }
        if ($valueTransfer > 0 && $this->balance >= $valueTransfer)
        {
            $this->withdrawn($valueTransfer);
            $account->deposit($valueTransfer);
        }
    }
}