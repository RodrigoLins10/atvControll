<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\http\Request;

class IdadeControll extends Controller
{
    public function calcula(int $ano, int $mes = null, $dia = null){
    $dataReal = Carbon::now('America/Sao_Paulo');
    $aniversario = Carbon::createfromDate($ano, $mes, $dia, 'America/Sao_Paulo');
    $data = $aniversario->diff($dataReal);

    if($aniversario > $dataReal){
        $res = "Não é possível calcular uma data futura com o tempo atual.";
    } elseif ($aniversario == $dataReal) {
        $res = "Não é possível calcular a mesma data atual.";
    } elseif ($mes == null || $dia == null) {
        $res = "Você possui " . $dataReal->format('Y') - $ano . " anos de idade.";
    } else {
        $res = "Você possui " . $data->format('%y') . " anos, " . $data->format('%m') . " meses e " . $data->format('%d') . " dias de idade.";
    }

    return $res;
    }}
