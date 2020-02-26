<?php
require_once 'autoload.php';

use Projeto\Alura\Model\Funcionario\{Desenvolvedor, Gerente, Diretor};
use Projeto\Alura\Model\CPF;
use Projeto\Alura\Service\BonificacaoCalculo;

$vini = new Gerente(
    'Vinicius',
    new CPF("123.456.789-10"),
    1000);

$pietra = new Diretor(
    'Pietra',
    new CPF("987.654.321-10"),
    4000);

$dev = new Desenvolvedor(
    'Pietra',
    new CPF("987.654.321-10"),
    2000);

$dev->nivelUp();

$controlado = new BonificacaoCalculo();
$controlado ->adicionaBonificacao($vini);
$controlado->adicionaBonificacao($pietra);
$controlado->adicionaBonificacao($dev);

echo $controlado -> getTotalBonificacoes();