<?php

use Projeto\Alura\Model\Conta\Titular;
use Projeto\Alura\Model\CPF;
use Projeto\Alura\Model\Endereco;

require_once "autoload.php";

$umEndereco = new Endereco("Barueri","PQ Imperial", "Rua B", "55");
$umaPessoa = new Titular(new CPF("524.989.855-52"), "Teste Teste", $umEndereco);
$umEndereco->city = "Pedro".PHP_EOL;
echo $umaPessoa->cpf;


