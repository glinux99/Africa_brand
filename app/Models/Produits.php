<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'categorie', 'marque', 'unite',
        'quantite', 'remboursable', 'image', 'vignette', 'video_fournisseur', 'lien_video', 'couleur', 'prix', 'reduction', 'description'
    ];
}
