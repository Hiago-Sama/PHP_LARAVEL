<?php

//include 'function.php'; -> se o nome estiver errado ele apans estora um aviso e continua o codigo.
//require_once 'function.php'; -> verifica se o arquivo ja foi importado sem gerar erro e uma forma mais segura que o require;
//require 'function.php'; obriga a existir o arquivo, caso controrio retorna um fatal error
require_once 'function.php';

$currentAccount = [
    '123.456.789-10' => [
        'bankHolder' => 'Vinicius',
        'balance' => 1500.3
    ],
    '123.456.999-10' => [
        'bankHolder' => 'Maria',
        'balance' => 15000.0
    ],
    '123.456.745-10' => [
        'bankHolder' => 'Carlos',
        'balance' => 600.5
    ]
];

//unset($currentAccount['123.456.999-10']); -> remove essa informacao da variavel,

deposit(856.0, $currentAccount['123.456.789-10']);
withdraw(600.5,$currentAccount['123.456.745-10']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($currentAccount as $cpf => $account){ ?>
        <dt>
            <h3>
             <?= $account['bankHolder'] ?> - <?= $cpf ?>
            </h3>
        </dt>
        <dd>
            Saldo:<?= $account['balance'] ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
