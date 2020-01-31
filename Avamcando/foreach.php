<?php

$contaCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1500.3
    ],
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 15000.0
    ],
    '123.456.789-10' => [
        'titular' => 'Carlos',
        'saldo' => 600.5
    ]
];

$contaCorrentes['123.9654.733.-12'] = [
    'titular' => 'Steicy',
    'saldo' => 45454144454.09
];

foreach ($contaCorrentes as $cpf => $conta){
    echo  $conta['titular'];
}