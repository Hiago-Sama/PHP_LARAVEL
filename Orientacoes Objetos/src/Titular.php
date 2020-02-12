<?php

class Titular{
    private $name;
    private $cpf;
    private $endereco;

    public function __construct(CPF $cpf, string $name, Endereco $endereco)
    {
        $this->validation($name);
        $this->name = $name;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    private function validation(string $nameBankHolder)
    {
        if(strlen($nameBankHolder) < 5){
            echo "Nome deve ser maior que 5 caraceres ! ";
            exit();
        }

    }

    public function getCpf(): string
    {
        return $this->cpf->getCpfNumber();
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }
}