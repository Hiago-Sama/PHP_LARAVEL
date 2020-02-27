<?php
require_once "Calculo.php";

$calc = new Calculo();

$materias = ["Matematica", "Portugues", "Filosofia", "Historia", "Quimica"];
$notas = [9, 8, 10, 6, 8];

$media = $calc->cacl($notas, $materias);
/*
array_combine($materias, $notas); retorna um array com as strings como indice
*/
if($media != null){
    echo "Sua media é: $media";
    return;
}
echo "Não foi possivel fazer o calculo.";



