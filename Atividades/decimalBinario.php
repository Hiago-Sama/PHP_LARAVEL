<?php
function inverter($valor){
    $r = '';
    for ($i = strlen($valor); $i >= 0; $i--) {
        $r .= substr($valor, $i, 1);
    }
    return $r;
}


$numero = 5;
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
echo "Versão binaria: " . inverter($t) . PHP_EOL ;
