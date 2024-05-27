<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternautesController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\contenuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulaire_experience', function () {
    return view('retour');
});

//Route::post('/soumission_formulaire', [InternautesController::class, 'valider']);
Route::post('/soumission_formulaire', [InternautesController::class, 'store']);


Route::get('/page_accueil', function () {
    return view('accueil');
});


Route::get('/page_connexion', function () {
    return view('auth/connexion');
});
Route::post('/page_connexion', [ConnexionController::class, 'connexion']);
//Route::post('/page_deconnexion', [ConnexionController::class, 'logout']);
//Route::get('/page_c', [ConnexionController::class, 'admin']);

/* Route::get('/tableau_de_bord', function () {
    return view('/');
}); */

Route::post('/logout', [ConnexionController::class, 'logout']);


Route::get('/tableau_de_bord', function () {
    return view('tableau_de_bord');
});


Route::get('/modification_retour/{id}', [InternautesController::class, 'modification_retour']);
Route::get('/tableau_de_bord', [contenuController::class, 'affichage_retours']);
Route::post('/modification_retour', [InternautesController::class, 'modification_retour']);
Route::post('/modification', [IntenautesController::class, 'enregistrement_modification']);
 
/* Route::get('/tableau_de_bord', [contenuController::class, 'affichage_retours'])->name('tableau_de_bord');

Route::get('/modification_retour/{id}', [InternautesController::class, 'modification_retour'])->name('modification_retour');
Route::put('/modification_retour/{id}', [InternautesController::class, 'enregistrement_modification'])->name('modification_retour.update'); */