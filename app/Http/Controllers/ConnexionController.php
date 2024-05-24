<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConnexionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ConnexionController extends Controller
{
    public function connexion (ConnexionRequest $request) {
        $credentials = $request->validate([
            /* 'email' => ['required', 'email'],
            'password' => ['required'],
            */
       ]); 
       
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('accueil');
        }
 
        return back()->withErrors([
            'email' => 'Adresse mail et/ou mot de passe éronné(e)(s).',
        ])->onlyInput('email');
    }
}
