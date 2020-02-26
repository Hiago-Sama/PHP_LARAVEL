<?php

use Projeto\Alura\Model\Conta\Conta;

class ContaPoupanca extends Conta
{
    protected function percentTarifa(): float
    {
        return 0.03;
    }

}