<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternautesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulaire_experience', function () {
    return view('retour');
});

//Route::post('/soumission_formulaire', [InternautesController::class, 'valider']);
Route::post('/soumission_formulaire', [InternautesController::class, 'store']);
