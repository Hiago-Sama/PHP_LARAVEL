<?php

namespace Projeto\Alura\Model\Conta;
use Projeto\Alura\Interfaces\Autenticador;
use Projeto\Alura\Model\Pessoa;
use Projeto\Alura\Model\CPF;
use Projeto\Alura\Model\Endereco;


class Titular extends Pessoa implements Autenticador {

    private $endereco;

    public function __construct(CPF $cpf, string $name, Endereco $endereco)
    {
        parent::_constructor($name, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }


    public function logar(string $senha): bool
    {
        return $senha === '123';
    }
}