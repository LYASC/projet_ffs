<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternautesController;
use App\Http\Controllers\ConnexionController;


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


/* 
Route::get('/page_deconnexion', function () {
    return view('auth/deconnexion');
}); */
