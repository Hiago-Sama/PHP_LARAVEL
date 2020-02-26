<?php
spl_autoload_register(function (string $class){
$class = str_replace('Projeto\\Alura','src',$class);
$class = str_replace('\\',DIRECTORY_SEPARATOR, $class);
$class .= '.php';

if (file_exists($class)){
require_once $class;
}
});

use Projeto\Alura\Model\{Conta\ContaCorrente, Endereco, Conta\Titular, Conta\ContaPoupanca, Conta\Conta, CPF};


$endereco = new Endereco("Barueri", "Parque Imperial", "B", "55");
$felipe = new Titular(new CPF("123.456.789-10"), "Felipe Dias", $endereco);
$firstAccount = new ContaCorrente($felipe);
$pedro = new Titular(new CPF("123.654.897-11"), "Pedro Henrique", $endereco);
$secondAccount = new ContaPoupanca($pedro);

$firstAccount -> deposit(95600.8);
$firstAccount -> transfer($secondAccount,800.90);

echo $firstAccount->getTitularName() . PHP_EOL;
echo $firstAccount->getTitularCpf() . PHP_EOL;
echo $firstAccount->getBalance() . PHP_EOL;


$enderecoTes = new Endereco("a","b", "AB", "23p");
$teste = new Titular(new CPF("541.233.163-25"), "bfnkshdj", $enderecoTes);
$teste = new ContaCorrente($teste);