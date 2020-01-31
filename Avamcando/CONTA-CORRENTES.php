<?php

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1500.3
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 15000.0
];

$conta3 = [
    'titular' => 'Carlos',
    'saldo' => 600.5
];


$contaCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contaCorrentes); $i ++){
    echo $contaCorrentes[$i]['titular'] . PHP_EOL;
}