<?php
$binario = 1110001110011;
$c = $binario;
$valor = 0;

for($i=0; $i < strlen($binario); $i++) {

    $k = $c % 10;
    if (!($k === 0 or $k === 1)) {
        echo "Valor não é binario.";
        exit();
    }
    $valor += $k * 2 ** $i;
    $c = (int)($c / 10);
}

echo "Valor binario: " . $binario . PHP_EOL;
echo "Decimal: $valor";