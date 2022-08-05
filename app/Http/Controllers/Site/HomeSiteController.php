<?php

namespace App\Http\Controllers\Site;

use App\Models\Images;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeSiteController extends Controller
{
    public function index()
    {
        $produits = Produit::join('images', 'produit_id', 'produits.id')->paginate(20);
        $categories = Categorie::join('images', 'categorie_id', 'categories.id')->paginate(20);
        return view('acceuil', ['produits' => $produits, 'categories' => $categories]);
    }
    public function produit()
    {
        $produits = Produit::join('images', 'produit_id', 'produits.id')->paginate(20);
        return view('produits.produits_all', ['produits' => $produits]);
    }
    public function details($id)
    {
        $produit = Produit::find($id)->first();
        $images = Images::where('produit_id', $id)->get();
        $produitCat = Produit::where('categorie', $produit->categorie)
            ->join('images', 'produits.id', 'produit_id')->paginate(10);
        return view(
            'produits.details',
            [
                'produit' => $produit,
                'images' => $images,
                'produitCat' => $produitCat
            ]
        );
    }
}
