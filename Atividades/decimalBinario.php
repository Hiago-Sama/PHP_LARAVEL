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


$numero = 15;
$t = "";

for($i=0; $i < 10; $i++){

    if ($numero >= 1 && $numero % 2 == 0){
        $t .= "0";
    }
    if ($numero >= 1 && $numero % 2 == 1){
        $t .= "1";
    }

    $numero = intval($numero) / 2;
}


echo "Versão binaria: " . inverter($t) . PHP_EOL ;
