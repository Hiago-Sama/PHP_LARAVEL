<?php

require "src/Conta.php";
require "src/Titular.php";
require "src/CPF.php";
require "src/Endereco.php";

$endereco = new Endereco("Barueri", "Parque Imperial", "B", "55");
$felipe = new Titular(new CPF("123.456.789-10"), "Felipe Dias", $endereco);
$firstAccount = new Conta($felipe);
$pedro = new Titular(new CPF("123.654.897-11"), "Pedro Henrique", $endereco);
$secondAccount = new Conta($pedro);

$firstAccount -> deposit(95600.8);
$firstAccount -> transfer($secondAccount,800.90);

echo $firstAccount->getTitularName() . PHP_EOL;
echo $firstAccount->getTitularCpf() . PHP_EOL;
echo $firstAccount->getBalance() . PHP_EOL;

var_dump($firstAccount, $secondAccount);

$enderecoTes = new Endereco("a","b", "AB", "23p");
$teste = new Titular(new CPF("541.233.163-25"), "bfnkshdj", $enderecoTes);
$test = new Conta($teste);
echo Conta::getNumberAccount() . PHP_EOL;