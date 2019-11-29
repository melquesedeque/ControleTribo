<?php

namespace App\Http\Controllers;

use App\Tribo;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller{

    public function telaPainel(){
        if (Auth::check() === true) {
            return $this->calcularEstatistico();
        } else {
            return redirect()->route('telaLogin');
        }
        
    }

    public function calcularEstatistico(){
        
        $primeiroDiaMes = date('1-m-Y');
        $ultimoDiaMes = date('t-m-Y');
        $begin = new DateTime( $primeiroDiaMes );
        $end = new DateTime( $ultimoDiaMes );
        $end = $end->modify( '+1 day' );

        $interval = new DateInterval('P1D');
        $daterange = new DatePeriod($begin, $interval ,$end);

        $dados = array();
        foreach($daterange as $date){
            if($date->format("l") == 'Saturday'){
                array_push($dados, $date->format("d"));
                //echo $date->format("d-m-Y") . "<br>";
            }
        }

        $dataFormatada = date('Y-m');
        $tribosAtalaia = Tribo::where([
            ['dataTribo', 'like', "$dataFormatada%"],
            ['igreja', 'atalaia']
            ])->get();

        $tribos = Tribo::where('dataTribo', 'like', "$dataFormatada%")->get();

        $tribosPilar = Tribo::where([
            ['dataTribo', 'like', "$dataFormatada%"],
            ['igreja', 'pilar']
            ])->get();

        $ofertaTotalAt = 0.0;
        $qtdTotalAt = 0;
        $ofertaAt = array();
        foreach ($tribosAtalaia as $triboAt) {
            $ofertaTotalAt += $triboAt->oferta;
            $qtdTotalAt += $triboAt->quantidadePessoal;
            array_push($ofertaAt, $triboAt->oferta);
        }

        $ofertaTotalPl = 0.0;
        $qtdTotalPl = 0;
        foreach ($tribosPilar as $triboPl) {
            $ofertaTotalPl += $triboPl->oferta;
            $qtdTotalPl += $triboPl->quantidadePessoal;
        }

        return view('dashboard', ['ofertaTotalAt' => $ofertaTotalAt, 'quantidadeTotalAt' => $qtdTotalAt, 
                                  'ofertaTotalPl' => $ofertaTotalPl, 'quantidadeTotalPl' => $qtdTotalPl,
                                  'dados' => $dados, 'tribos' => $tribos, 'ofertaAt' => $ofertaAt]);
    }

}
