<?php
function inverter($valor)
{
    $reverse = 0;

    while ($valor > 0) {
        $reverse = $reverse * 10;
        $reverse = $reverse + $valor % 10;
        $valor = (int)($valor / 10);
    }
    return $reverse;
}

$numeroNatural = 3121213;
$verificacao = inverter($numeroNatural);

if ($numeroNatural === $verificacao){
    echo "Decimal é um palidromo";
}
if($numeroNatural !== $verificacao)
{
    echo "Decimal não é um palidromo";
}