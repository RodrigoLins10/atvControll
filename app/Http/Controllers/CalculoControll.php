<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;

class CalculoControll extends Controller {
    public function Calculo(int $numero1,int $numero2, $operacao = null){
        if ($operacao == null){
            $operacaoSoma = $numero1 + $numero2;
            $operacaoSub = $numero1 - $numero2;
            $operacaoMulti = $numero1 * $numero2;
            $operacaoDivi = $numero1 / $numero2;
            return
                $numero1 . ' + ' . $numero2 . ' = ' . $operacaoSoma . '<br>' .
                $numero1 . ' - ' . $numero2 . ' = ' . $operacaoSub . '<br>' .
                $numero1 . ' x ' . $numero2 . ' = ' . $operacaoMulti . '<br>' .
                $numero1 . ' % ' . $numero2 . ' = ' . $operacaoDivi;
            }
            if ($operacao == 'soma' or 'Soma' or 'SOMA'){
                $operacaoSoma = $numero1 + $numero2;
                return $numero1 . ' + ' . $numero2 . ' = ' . $operacaoSoma;
            }
            if ($operacao == 'subtração'){
                $operacaoSub = $numero1 - $numero2;
                return $numero1 . ' - ' . $numero2 . ' = ' . $operacaoSub;
            }
            if ($operacao == 'multiplicação'){
                $operacaoMulti = $numero1 * $numero2;
                return $numero1 . ' x ' . $numero2 . ' = ' . $operacaoMulti;
            }
            if ($operacao == 'divisão'){
                $operacaoDivi = $numero1 / $numero2;
                return $numero1 . ' % ' . $numero2 . ' = ' . $operacaoDivi;
            }
    }
}
