<?php declare(strict_types=1);// Não faz conversão automatica



class ArrayUtils {

    public static function remover(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);
        if(is_int($posicao)){

            unset($array[$posicao]);

        }if(!is_int($posicao)){
                echo "Não foi possivel achar esse elemento";
        }
    }

    public static function encontrarPessoasComSaldoMaior(int      $saldo,array $array): array{
        $correntistasComSaldoMaior = array();
        foreach ($array as $chave => $valor) {
          if($valor > $saldo){
             $correntistasComSaldoMaior[] = $chave;
      }
    }
     return $correntistasComSaldoMaior;
  }
}