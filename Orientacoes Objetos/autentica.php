<?php


use Projeto\Alura\Model\Conta\Titular;
use Projeto\Alura\Model\CPF;
use Projeto\Alura\Model\Endereco;
use Projeto\Alura\Model\Funcionario\Diretor;
use Projeto\Alura\Model\Funcionario\Gerente;
use Projeto\Alura\Service\Autentica;
require_once "autoload.php";



$diretor = new Titular( new CPF("456.789.123-20"), "Hiago Matheus", new Endereco("","","",""));
$auth = new Autentica();
$auth->tentaLogin($diretor,"1234");