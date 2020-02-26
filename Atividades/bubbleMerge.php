<?php
$array = [6, 1, 0, 60, 9, 81, 603];
$array2 = [6, 6, 8, 9, 1, 100, 63, 98, 71];

function burble(&$v1, &$v2){
    $v3 = $v1;
    $v1 = $v2;
    $v2 = $v3;

}
function mergeSort(&$array){
    if(count($array) == 1 ) return $array;
    $metadeArray = count($array) / 2;
    $esq = array_slice($array, 0, $metadeArray);
    $dir = array_slice($array, $metadeArray);
    $esq = mergeSort($esq);
    $dir = mergeSort($dir);
    return merge($esq, $dir);
}
function merge($esq, $dir){
    $new = [];
    while (count($esq) > 0 && count($dir) > 0){
        if($esq[0] > $dir[0]){
            $new[] = $dir[0];
            $dir = array_slice($dir , 1);
        }else{
            $new[] = $esq[0];
            $esq = array_slice($esq, 1);
        }
    }
    while (count($esq) > 0){
        $new[] = $esq[0];
       $esq = array_slice($esq, 1);
    }
    while (count($dir) > 0){
        $new[] = $dir[0];
        $dir = array_slice($dir, 1);
    }
    return $new;
}

for ($i=0; $i < count($array) -1; $i++){
    for ($k = $i + 1; $k  < count($array); $k++){
        if ($array[$i] > $array[$k]) {
            burble($array[$i], $array[$k]);
        }
    }

}


echo "Bubble: ";
foreach ($array as $item){
 echo $item . " ";
}

echo PHP_EOL;

echo "Merge: ";
foreach (mergeSort($array) as $item){
    echo $item . " ";
}