<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prix',
        'categorie',
        'unite',
        'status',
        'vendeur',
        'adresse',
        'numero',
        'description',
        'video'
    ];
}
