<?php
$numero = strval(118990887798001);
$c = strlen($numero);
for($i=1; $i < $c; $i++){
    if ($numero[$i] == $numero[$i - 1]){
        echo "$numero[$i] -> {$numero[$i - 1]} " . PHP_EOL;
    }
}

