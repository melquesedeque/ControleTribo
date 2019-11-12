<?php

namespace App\Http\Controllers;

use App\Tribo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultarTriboController extends Controller{
    
    public function telaConsultas(){

        if(Auth::check() === true){
            $tribos = Tribo::all();
            return view('consultas', ['tribos' => $tribos]);
        }else{
            return redirect()->route('telaLogin');
        }
    
    }

    public function pesquisarIgreja(Request $request){
        $tribos = Tribo::where('igreja', $request->igreja)->get();
        return view('consultas', ['tribos' => $tribos]);
    }
}
