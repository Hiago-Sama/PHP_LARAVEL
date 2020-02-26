<?php
function criarHeap(&$array, $tamanho, $posicao)
{
    $filhoEsq = ($posicao + 1) * 2 - 1;
    $filhoDir = ($posicao + 1) * 2;
    $pai = 0;

    if ($filhoEsq < $tamanho && $array[$filhoEsq] > $array[$posicao]) {
        $pai = $filhoEsq;
    } else {
        $pai = $posicao;
    }
    if ($filhoDir < $tamanho && $array[$filhoDir] > $array[$pai]) {
        $pai = $filhoDir;
    }
    if ($pai != $posicao) {

        troca($array, $posicao, $pai);
        criarHeap($array, $tamanho, $pai);
    }
}
function troca(&$array, $posicao, $i){
    $aux = $array[$posicao];
    $array[$posicao] = $array[$i];
    $array[$i] = $aux;
}
function heapSort(&$array, $tamanho) {
    $tamanhoAux = $tamanho;

    for ($i = ($tamanhoAux - 1) / 2; $i >= 0; $i--)
        criarHeap($array, $tamanhoAux, $i);

    for ($i = $tamanho - 1; $i > 0; $i--)
    {
        $tamanhoAux--;
        troca($array,$i, 0);
        criarHeap($array, $tamanhoAux, 0);
    }
}
function construirMaxHeap(&$array){
    $tam = count($array);
    for ($i = ($tam / 2) - 1; $i >= 0; $i--)
    {
        criarHeap($array, $tam, $i);
    }
}


$array = [ 10, 14, 25, 12, 31, 49, 77, 89, 01, 200];


heapSort($array, count($array));

echo  "Ordenaçao: ";
foreach ($array as $item){
    echo $item . " ";
}
echo PHP_EOL;

echo  "Min-heap: ";
foreach ($array as $item){

    echo $item . " ";
}
echo PHP_EOL;

construirMaxHeap($array);

echo  "Max-heap: ";
foreach ($array as $item){

    echo $item . " ";
}



