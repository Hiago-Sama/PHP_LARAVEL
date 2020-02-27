<?php declare(strict_types=1);// Não faz conversão automatica

require_once 'ArrayUtils.php';

$correntistas_e_compras = [
"Giovanni",
 12,
"Maria",
 25,
"Luis",
"Luísa",
"12"
];

ArrayUtils::remover("12", $correntistas_e_compras);
echo "<pre>";
var_dump($correntistas_e_compras);
echo "</pre>";

