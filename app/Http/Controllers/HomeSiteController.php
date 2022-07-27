<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Models\select;
use Illuminate\Http\Request;

class HomeSiteController extends Controller
{
    public function index()
    {
        $categorie = select::paginate(10);
        $produits = Produits::paginate(6)->sortDesc();
        return view('acceuil', ['categories' => $categorie, 'produits' => $produits]);
    }
}
