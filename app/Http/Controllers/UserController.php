<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'E-mail é obrigatório',
            'password.required' => 'Senha é obrigatório'
        ]);
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            dd('Logou');    
            // $request->session()->regenerate();
            // return redirect()->intended('dashboard');
        }else{
            return redirect()->back()->with('danger', 'E-mail ou senha inválido');
        }
    }
}
