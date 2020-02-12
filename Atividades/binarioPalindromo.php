<?php

function inverter($valor)
{
    $reverse = 0;

    while ($valor > 0) {
        $reverse = $reverse * 10;
        $reverse = $reverse + $valor % 10;
        verificacao($valor % 10);
        $valor = (int)($valor / 10);
    }
    return $reverse;
}
function verificacao($d)
{

    if ($d === 0 or $d === 1) {
       return;
    }
    echo "Valor não é binario.";
    exit();
}


$numeroBinario = 111000111;
$c = strlen($numeroBinario);
$inverso = inverter($numeroBinario);


if ($numeroBinario === $inverso) {
    echo "Decimal é um palidromo";
}
if ($numeroBinario !== $inverso) {
    echo "Decimal não é um palidromo";

}


