<?php

class Calculo{
    public function cacl(array $notas, array $materias): float 
    {

        $countNotas = count($notas);
        $countMateria = count($materias);
        $total = 0;

        if($countNotas > 0){
            if ($countNotas > $countMateria){
                echo "<p> Numero de Notas maior que de Materias </p>";
                return null;
            }
            if ($countMateria > $countNotas){
                echo "<p> Numero de Materias maior que de Notas </p>" ;
                return null;
            }
            if ($countNotas == $countMateria) {
                for ($i = 0; $i < $countNotas; $i++) {
                    $total += $notas[$i];
                }
                for ($j = 0; $j < $countNotas; $j++){
                    echo "<p>Sua nota em $materias[$j] é: $notas[$j]</p>";
                }
                return $media = $total / $countNotas;
                
            }
            }
            if($countNotas <= 0){
                    return null;
            }
    }
}