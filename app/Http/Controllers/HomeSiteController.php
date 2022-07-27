<?php

namespace App\Http\Controllers;

use App\Models\select;
use Illuminate\Http\Request;

class HomeSiteController extends Controller
{
    public function index()
    {
        $categorie = select::paginate(10);
        return view('acceuil', ['categories' => $categorie]);
    }
}
