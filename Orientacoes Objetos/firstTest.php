<?php

require "src/Conta.php";

$felipe = new Conta();
$pedro = new Conta();

$felipe -> deposit(95600.8);
$felipe -> transfer($pedro,800.90);

var_dump($felipe, $pedro);