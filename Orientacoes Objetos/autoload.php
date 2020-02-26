<?php
spl_autoload_register(function (string $class){
    $class = str_replace('Projeto\\Alura','src',$class);
    $class = str_replace('\\',DIRECTORY_SEPARATOR, $class);
    $class .= '.php';

    if (file_exists($class)){
        require_once $class;
    }
});