<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adherant extends Model
{
    protected $fillable = [
        'nom_prenom',
        'email',
        'numeroTel',
        'competences',
        'motivations',
    ];
}
