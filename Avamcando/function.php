<?php

function msg($mesage){
    echo $mesage . '<br>';
}

function withdraw(float $value, array &$account)
{
    if ($value > $account['balance']){
        msg("Valor para saque indisponível !");
    }else{
        $account['balance'] -= $value;
    }
    return $account['balance'];
}

/*
 *
 * function deposito(float $valorDeposito, string $cpf): array, string, int, float -> garante o tipo de retorno.
 * {
 *      codigo......
 *
 *      return variavel
 * }
 *
 * */

function deposit(float $value, array &$account)
{
     if ($value <= 0){
         msg('Valor de depósito invalido.');
     }else{
         $account['balance'] += $value;
     }
    return $account['balance'];
}


function exbirConta(array $account){
    ['bankHolder' => $bankHolder, 'balance' => $balance] = $account;
    echo "<li>Titular: $bankHolder. Saldo: $balance</li>";
}