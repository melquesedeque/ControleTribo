<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{

    public function telaLogin(){
        return view('login');
    }

    public function autenticarLogin(Request $request){
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->senha])){
            return redirect()->route('telaConsultas');
        }else{
            return redirect()->back()->withInput()->withErrors('Dados Não Conferem!');
        }
    }

    public function deslogar(){
        Auth::logout();
        return redirect()->route('telaLogin');
    }

    public function cadastroLoginPadrao(){
        $user = new User();
        $user->name = 'Melquesedeque';
        $user->email = 'melque@gmail.com';
        $user->password = Hash::make('12345');
        $user->save();
    }
}
