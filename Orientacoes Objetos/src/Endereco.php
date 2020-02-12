<?php


class Endereco
{
    private $city;
    private $bairro;
    private $rua;
    private $numero;


    public function __construct(string $city, string $bairro, string $rua, string $numero)
    {
        $this->city = $city;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function getRua(): string
    {
        return $this->rua;
    }
}