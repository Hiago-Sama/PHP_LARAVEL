<?php


namespace Projeto\Alura\Interfaces;


trait acess
{
    public function __get($name)
    {
        $met = "get".ucfirst($name);
        return $this->$met();
    }
}