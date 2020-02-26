<?php

namespace Projeto\Alura\Model;

use Projeto\Alura\Interfaces\acess;

/**
 * Class Endereco
 * @package Projeto\Alura\Model
 * @property string $city
 * @property string $bairro
 * @property string $rua
 * @property string $numero
 */
final class Endereco
{
    use acess;
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

    public function __toString(): string
    {
        return "Logradouro: $this->rua,  Numero: $this->numero, Bairro: $this->bairro, Cidade: $this->city";
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



    public function __set($name, $value)
    {
       $this->$name = $value;
    }
}