<?php
function inverter($valor){
    $r = '';
    for ($i = strlen($valor); $i >= 0; $i--) {
        $r .= substr($valor, $i, 1);
    }
    return $r;
}


$numero = 50;
$t = "";

for($i=0; $i <= 20; $i++){

    if ($numero >= 1 && $numero % 2 == 0){
        $t .= "0";
    }
    if ($numero >= 1 && $numero % 2 == 1){
        $t .= "1";
    }

    $numero = intval($numero) / 2;
}

$inverso = inverter($t);


if ($t === $inverso) {
    echo "Decimal é um palidromo".PHP_EOL;
}
if ($t !== $inverso) {
    echo "Decimal não é um palidromo".PHP_EOL;

}

echo "Versão binaria: " . inverter($t) . PHP_EOL ;