<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contenu_db;
use App\Models\Internaute;

class contenuController extends Controller
{
    public function affichage_retours ()
    {
        
        $internautes = Internaute::all();
        return view('contenue_db', ['internautes' => $internautes]);
        
    }
}
