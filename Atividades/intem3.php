<?php
$numero = 18990899999987;
$c = $numero;
$digito = 9;
$co = 0;

if($digito >= 0 && $digito <= 9){
    for($i=0; $i <= strlen($numero); $i++){
        $k = $c % 10;
        if ($k == $digito){
            $co++;
        }
        $c = (int)($c / 10);
    }
    echo "o digito $digito aparece $co" . "x no Numero $numero";
    return; // não é a melhor forma, mas essa aki ja basta nesse item.
}


echo "Digito deve estar entre O e 9";