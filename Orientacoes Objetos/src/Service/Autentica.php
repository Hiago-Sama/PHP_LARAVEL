<?php


namespace Projeto\Alura\Service;


use Projeto\Alura\Interfaces\Autenticador;

class Autentica
{

    public function tentaLogin(Autenticador $auth, string $senha)
    {

        if ($auth->logar($senha))
        {
            echo "Usuario Logado";
            return;
        }
        echo "Senha invalida";
    }
}