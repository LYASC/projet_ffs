<?php

namespace App\Http\Controllers;

use App\Models\Internaute;
use App\Http\Requests\RetourRequest;
use Illuminate\Http\Request;

class InternautesController extends Controller
{

    public function store(RetourRequest $request) 
    {
    
        $internaute = new Internaute();
        $internaute ->nom = $request->nom;
        $internaute ->prenom = $request->prenom;
        $internaute ->email = $request->email;
        $internaute ->type_activite = $request->type_activite;
        $internaute ->departement= $request->departement;
        $internaute ->date_activite = $request->date_activite;
        $internaute ->titre_du_retour = $request->titre_du_retour;
        $internaute ->retour = $request->retour;
        $internaute ->suggestion = $request->suggestion;
        $internaute ->niveau_pratique = $request->niveau_pratique;
        // Enregistrement de la nouvelle instance dans la base de données
        $internaute->save();
        return redirect()->back()->with('soumis','Votre retour à bien été soumis');
    }
}
