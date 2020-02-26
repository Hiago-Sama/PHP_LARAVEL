<?php
$numeros = [48, 3, 5, 7, 8, 6, 20, 100, 63];
$soma = 0;
$par = [];
$impar = [];
$primo = 0;

function soma($valor){
    $GLOBALS['soma'] += $valor;
    return $GLOBALS['soma'];
}
function primo($valor)
{
    $k = 0;
    for ($i = 1; $i <= $valor; $i++) {
        if ($valor % $i == 0) {
            $k++;

        }
    }

    if ($k == 2) {
        return $k = 1;
    }

    if ($k != 2) {
        return $k = 0;
    }

}
function par($valor) {
    if($valor % 2 == 0){
        return $valor;
    }


}
function impar($valor) {
    if($valor % 2 != 0){
        return $valor;
    }


}

for($i= 0; $i < count($numeros); $i++) {
    $soma = soma($numeros[$i]);
    $primo += primo($numeros[$i]);
    array_push($par, par($numeros[$i]));
    array_push($impar, impar($numeros[$i]));

}
echo "Soma: $soma".PHP_EOL;
echo "Primos: $primo".PHP_EOL;
echo "Par: ";
foreach (array_filter($par) as $item){
    echo $item . " ";
}
echo PHP_EOL;
echo "Impar: ";
foreach (array_filter($impar) as $item){
    echo $item . " ";
}

