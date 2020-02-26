<?php
$valorAlvo = 98;
$primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
$min = 0;
$max = count($primes) - 1;
$media = 0;

foreach ($primes as $item) {
    $media = (int)($max + $min) / 2;
    if ($primes[$media] !== $valorAlvo) {
        if ($primes[$media] < $valorAlvo) {
            $min = $media + 1;

        } else if ($primes[$media] > $valorAlvo) {
            $max = $media - 1;

        }
        if ($max < $min){
            echo "Numero alvo não encontrado";
            exit();
        }

    }

}

echo "Alvo encontrado dentro do array! ".PHP_EOL.
"Valor: " .$primes[$media].PHP_EOL.
"Indice: ".(int)$media;