<?php

namespace Projeto\Alura\Model\Conta;
use Projeto\Alura\Model\Conta\Titular;
use Projeto\Alura\Model\CPF;


abstract class Conta
{
    protected $titular;
    protected $balance;
    protected static $numberAccount = 0;

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
         $tarifaSaque = $valuWithdrawn * $this->percentTarifa();
         $valuWithdrawn = $valuWithdrawn + $tarifaSaque;
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
        return $this->titular->getNome();
    }

    public function getTitularCpf()
    {
        return $this->titular->getCpf();
    }

    abstract protected function percentTarifa():float;


}

