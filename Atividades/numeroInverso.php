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

function verificar($valor)
{
    $d = $valor;
    while ($valor > 0) {
        $n = $valor % 10;
        if ($n === 0) {
            echo "Decimal contem 0: ". $d . PHP_EOL;
            echo "Numero não invertido.";
            exit();
        }
        $valor = (int)($valor / 10);
    }
    return $d;
}

$numero = verificar(36664268);

echo "Numero natural: $numero".PHP_EOL;
echo "Numero invertido: " . inverter($numero) .PHP_EOL;