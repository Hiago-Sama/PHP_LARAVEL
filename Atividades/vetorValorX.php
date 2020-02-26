<?php
$numeros = [60, 90,36,54,5,98,34];
$valorX = 90;
$c = 0;

foreach ($numeros as $item){
    if ($item === $valorX){
        $c++;

    }
}

if ($c !== 0){
    echo "Valor $valorX encontrado dentro do vetor.";
}
if ($c === 0){
    echo "Valor $valorX não foi encontrado dentro do vetor.";
}