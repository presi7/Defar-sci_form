<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'adresseEmail',
        'nom',
        'prenom',
        'telephone',
        'adresseDomicile',
        'domaineCompetence',
        'question'
    ];
}
