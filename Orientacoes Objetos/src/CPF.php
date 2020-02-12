<?php

class CPF{

    private $cpfNumber;

    public function __construct(string $cpfNumber){

      $cpfNumber  = filter_var($cpfNumber, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($cpfNumber === false) {
            echo "Cpf inválido !";
            exit();
        }

        $this->cpfNumber = $cpfNumber;
    }


    public function getCpfNumber(): string
    {
        return $this->cpfNumber;
    }
}