<?php

class Conta
{
    private $titular;
    private $balance;
    private static $numberAccount = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->balance = 0;

        self::$numberAccount++;
     }

     public function __destruct()
     {
         self::$numberAccount--;
     }

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

    public static function getNumberAccount(): int
    {
        return self::$numberAccount;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }


    public function getTitularName(): string
    {
        return $this->titular->getName();
    }

    public function getTitularCpf(): string
    {
        return $this->titular->getCpf();
    }

}

