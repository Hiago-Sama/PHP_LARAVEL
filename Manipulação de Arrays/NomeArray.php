<?php

$nomes = "Giovanni, João, Maria, Pedro";

$array_nomes = explode(", ", $nomes); // Delimitador da string a transformando em Array em cada ", "....

foreach($array_nomes as $nome){
    echo "<p>Olá $nome</p>";
}

$nomesJuntos = implode(", ", $array_nomes);// transforma o array em string separando pela ", "

echo $nomesJuntos;