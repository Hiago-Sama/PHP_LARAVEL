<?php

namespace Projeto\Alura\Model;

use Projeto\Alura\Interfaces\acess;

/**
 * Class Pessoa
 * @package Projeto\Alura\Model
 * @property-read string $nome;
 * @property-read string $cpf;
 */
class Pessoa
{

    use acess;
    protected $nome;
    protected $cpf;

    public function _constructor(string $nome, CPF $cpf){

        $this->validation($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;

    }

    final protected function validation(string $nameBankHolder)
    {
        if(strlen($nameBankHolder) < 5){
            echo "Nome deve ser maior que 5 caraceres ! ";
            exit();
        }

    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {

        return $this->cpf->getCpfNumber();
    }



}