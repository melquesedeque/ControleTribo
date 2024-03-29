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
        $tribo->dataTribo         = $request->dataTribo; 
        $tribo->oferta            = $request->oferta; 
        $tribo->quantidadePessoal = $request->quantidadePessoal;
        $tribo->save();

        return redirect()->route('telaCadastro');
    }
    
    public function telaEditar($id){

        if(Auth::check() === true){
            $triboResultado = Tribo::find($id);
            $dados = ['tribosResultados' => $triboResultado];
            return view('editarTribo' , $dados);
        }else{
            return redirect()->route('telaLogin');
        }
    }

    public function editarTribo(Request $request, $id){
        if($request->igreja == '-Selecione a Igreja-'){
            return redirect()->back()->withInput()->withErrors('Selecione Uma Igreja');
        }

        $request->validate([
            'dataTribo'         => 'required',
            'oferta'            => 'required',
            'quantidadePessoal' => 'required|numeric'
        ]);

        Tribo::where('id', $id)->update([
            'igreja'            => $request->igreja,
            'dataTribo'         => $request->dataTribo,
            'oferta'            => $request->oferta,
            'quantidadePessoal' => $request->quantidadePessoal
        ]);

        return redirect()->route('telaConsultas');
    }

    public function deletarTribo($id){
        Tribo::destroy($id);
        return redirect()->route('telaConsultas');
    }
}
