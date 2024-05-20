<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internaute extends Model
{
    use HasFactory;
        protected $fillable = [
            'nom',
            'email' ,
            'type_activite',
            'departement',
            'date_activite',
            'titre_du_retour', 
            'retour',
            'suggestion',
            'niveau_pratique',
        ];

}
