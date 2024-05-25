<?php

namespace App\Http\Controllers;

use App\Models\User; 
use App\Http\Requests\ConnexionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class ConnexionController extends Controller
{
    public function connexion (ConnexionRequest $request) {
        $credentials = $request->validate([
             'email' => ['required', 'email'],
            'password' => ['required'],
            
       ]); 
       
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('tableau_de_bord');

        }
 
        return back()->withErrors([
            'email' => 'Adresse mail et/ou mot de passe éronné(e)(s).',
        ])->onlyInput('email');
    }
    
    /* public function admin() {
            $usersData = [
                [
                    'name' => 'arie',
                    'email' => 'arie@exemple.com',
                    'password' => Hash::make('admin1')
                ],
                [
                    'name' => 'benjamin',
                    'email' => 'benjamin@example.com',
                    'password' => Hash::make('admin2')
                ],
                [
                    'name' => 'claire',
                    'email' => 'claire@example.com',
                    'password' => Hash::make('admin3')
                ]
            ]; */
   public function admin() {

                $user = User::create([
                    'name' => 'ariella',
                    'email' => 'ariel@gmail.com',
                    'password' => Hash::make('admin')
                ]);
                
                $user2 = User::create([
                    'name' => 'benjamin',
                    'email' => 'benjamin@example.com',
                    'password' => Hash::make('admin2')
                ]);
                
                $user3 = User::create([
                    'name' => 'claire',
                    'email' => 'claire@example.com',
                'password' => Hash::make('admin3')
           ]);
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/page_accueil');
    }
    


}
