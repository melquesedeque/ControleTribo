<?php

namespace App\Http\Controllers;

use App\Tribo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TriboController extends Controller{

    public function telaCadastro(){

        if(Auth::check() === true){
            return view('cadastroTribo');
        }
            return redirect()->route('telaLogin');
    }

    public function cadastroTribo(Request $request){

        if($request->igreja == '-Selecione a Igreja-'){
            return redirect()->back()->withInput()->withErrors('Selecione Uma Igreja');
        }

        if($request->nomeTribo == '-Selecione a Tribo-'){
            return redirect()->back()->withInput()->withErrors('Selecione a Tribo');
        }

        $request->validate([
            'dataTribo'         => 'required',
            'oferta'            => 'required',
            'quantidadePessoal' => 'required|numeric'
        ]);

        //if(Tribo::created($request->all())){
        //    return redirect()->route('telaCadastro');
        //}
        $tribo = new Tribo();
        $tribo->igreja            = $request->igreja;
        $tribo->nomeTribo         = $request->nomeTribo; 
        $tribo->dataTribo         = $request->dataTribo; 
        $tribo->oferta            = $request->oferta; 
        $tribo->quantidadePessoal = $request->quantidadePessoal;
        $tribo->save();

        return redirect()->route('telaCadastro');
    }
    
}
