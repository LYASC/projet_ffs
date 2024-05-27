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
        $internaute->nom = $request->nom;
        $internaute->prenom = $request->prenom;
        $internaute->email = $request->email;
        $internaute->type_activite = $request->type_activite;
        $internaute->departement = $request->departement;
        $internaute->date_activite = $request->date_activite;
        $internaute->titre_du_retour = $request->titre_du_retour;
        $internaute->retour = $request->retour;
        $internaute->suggestion = $request->suggestion;
        $internaute->niveau_pratique = $request->niveau_pratique;
        $internaute->save();
        return redirect()->back()->with('soumis','Votre retour a bien été soumis');
    }

    public function modification_retour($id)
    {
        $internaute = Internaute::find($id);
        return view('modifier', compact('internaute'));
    }

    public function enregistrement_modification(Request $request, $id)
    {
        $internaute = Internaute::findOrFail($id);
        $internaute->nom = $request->nom;
        $internaute->prenom = $request->prenom;
        $internaute->email = $request->email;
        $internaute->type_activite = $request->type_activite;
        $internaute->departement = $request->departement;
        $internaute->date_activite = $request->date_activite;
        $internaute->titre_du_retour = $request->titre_du_retour;
        $internaute->retour = $request->retour;
        $internaute->suggestion = $request->suggestion;
        $internaute->niveau_pratique = $request->niveau_pratique;
        $internaute->save();

        return redirect()->route('tableau_de_bord')->with('soumis', 'Le retour a bien été modifié');
    }
}
