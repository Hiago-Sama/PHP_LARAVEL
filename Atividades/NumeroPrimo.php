<?php

$valor = 19;
$k = 0;
for($i=1; $i <= $valor; $i++ ){
    if($valor % $i == 0){
        $k++;
    }
}

if ($k == 2){
    echo "$valor: ë um numero primo";
}
if ($k != 2){
    echo "$valor: não é um numero primo";
}