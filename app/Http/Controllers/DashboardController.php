<?php

namespace App\Http\Controllers;

use App\Tribo;
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
        $tribosAtalaia = Tribo::where('igreja', 'atalaia')->get();
        //$tribosAtalaiaQuant = Tribo::where('igreja', 'atalaia')->select('quantidadePessoal')->get();
        $tribosPilar = Tribo::where('igreja', 'pilar')->get();

        $ofertaTotalAt = 0.0;
        $qtdTotalAt = 0;
        foreach ($tribosAtalaia as $triboAt) {
            $ofertaTotalAt += $triboAt->oferta;
            $qtdTotalAt += $triboAt->quantidadePessoal;
        }

        $ofertaTotalPl = 0.0;
        $qtdTotalPl = 0;
        foreach ($tribosPilar as $triboPl) {
            $ofertaTotalPl += $triboPl->oferta;
            $qtdTotalPl += $triboPl->quantidadePessoal;
        }

        return view('dashboard', ['ofertaTotalAt' => $ofertaTotalAt, 'quantidadeTotalAt' => $qtdTotalAt, 
                                  'ofertaTotalPl' => $ofertaTotalPl, 'quantidadeTotalPl' => $qtdTotalPl,
                                  'tribosAtalaia' => $tribosAtalaia, 'tribosPilar' => $tribosPilar]);
    }

}
