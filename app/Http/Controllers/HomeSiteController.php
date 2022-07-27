<?php

namespace App\Http\Controllers;

use App\Models\select;
use App\Models\Produits;
use App\Models\ImagesPub;
use App\Models\ImagesPub1;
use App\Models\ImagesPub2;
use App\Models\ImagesBottom;
use App\Models\ImagesCenter;
use Illuminate\Http\Request;

class HomeSiteController extends Controller
{
    public function index()
    {
        $categorie = select::paginate(10);
        $produits = Produits::paginate(6)->sortDesc();
        $imagesCenter = ImagesCenter::all();
        $imagesBottom = Produits::inRandomOrder()->limit(6)->get();
        $imagesPub = ImagesPub::all();
        $imagesPub1 = ImagesPub1::all();
        $imagesPub2 = ImagesPub2::all();
        return view(
            'acceuil',
            [
                'categories' => $categorie,
                'produits' => $produits,
                'imagesCenter' => $imagesCenter,
                'imagesBottom' => $imagesBottom,
                'imagesPub' => $imagesPub,
                'imagesPub1' => $imagesPub1,
                'imagesPub2' => $imagesPub2,
            ]
        );
    }
}
