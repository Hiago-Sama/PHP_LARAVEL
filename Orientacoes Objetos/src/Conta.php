<?php

class Conta
{
     public $cpf;
     public $namebankHolder;
     public $balance = 0;

     public function withdrawn(float $valuWithdrawn): void
     {
         if ($valuWithdrawn > $this -> balance)
         {

             echo "Valor indisponivel !";
         }
         if ($valuWithdrawn <= $this -> balance)
         {
             $this -> balance -= $valuWithdrawn;
         }

     }

     public function deposit(float $valueDeposit): void
     {
         if ($valueDeposit <= 0)
         {
             echo "Valor de depósito tem que ser maior que 0";
         }
         if ($valueDeposit > 0)
         {
             $this -> balance += $valueDeposit;
         }
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

