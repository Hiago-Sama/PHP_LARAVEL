<?php
$numero = strval(189901);
$c = strlen($numero);

if ($numero[0] == $numero[$c - 1]) {
    echo "O 1º digito e o ultimo sao iguais ";
    exit();
}
echo "O 1º digito e o ultimo não sao iguais ";