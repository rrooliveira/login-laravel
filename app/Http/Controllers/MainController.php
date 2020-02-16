<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function validarLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'senha' => 'required|alphaNum|min:3'
        ]);

        $dadosLogin = [
            'email' => $request->get('email'),
            'password' => $request->get('senha')
        ];

        if (Auth::attempt($dadosLogin)) {
            return redirect('main/loginAceito');
        } else {
            return back()->with('error', 'Usuário ou senha inválidos!');
        }
    }

    public function loginAceito()
    {
        return view('login-aceito');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('main');
    }
}
