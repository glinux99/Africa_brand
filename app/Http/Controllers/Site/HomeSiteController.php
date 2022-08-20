<?php

namespace App\Http\Controllers\Site;

use App\Models\Images;
use App\Models\Chariot;
use App\Models\Produit;
use App\Models\Actualite;
use App\Models\Categorie;
use App\Models\Promotion;
use App\Models\ConfigSite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeSiteController extends Controller
{

    public function config()
    {
        $config = ConfigSite::first();

        if (Auth::user()) {
            // $img = Images::where('users_id', Auth::user()->id)->first();
            // $img = "storage/" . $img->images;
            $img = "assets/img/default.png";
            $count = Chariot::where('users_id', Auth::user()->id)->count() ?? 0;
            Session()->put('cart-count', $count);
        } else $img = "assets/img/default.png";
        Session()->put('picprofile', $img);
        Session()->put('config', $config);
    }
    public function index()
    {
        $promotions = Produit::join('images', 'images.produit_id', 'produits.id')
            ->join('promotions', 'promotions.produit_id', 'produits.id')->get();
        $deadline = str_replace("-", '/', Promotion::orderBy('deadline', 'DESC')->first('deadline')->deadline);
        // dd($deadline);
        $produits = Produit::join('images', 'produit_id', 'produits.id')->groupBy('produit_id')->paginate(20);
        $categories = Categorie::join('images', 'categorie_id', 'categories.id')
            ->where('visible', '1')
            ->orwhere('visible', null)
            ->paginate(20);
        HomeSiteController::config();
        $center_img = Images::where('center_images', 1)->get();
        $pub_img = Images::where('pub_images', 1)->paginate(4);
        $actualite = Actualite::join('images', 'actualite_id', 'actualites.id')->paginate(10);
        return view('acceuil', [
            'center_img' => $center_img,
            'pub_img' => $pub_img,
            'produits' => $produits,
            'categories' => $categories,
            'actualites' => $actualite,
            'promotions' => $promotions,
            'deadline' => $deadline
        ]);
    }
    public function produit()
    {
        $produits = Produit::join('images', 'produit_id', 'produits.id')->groupBy('produit_id')->paginate(20);
        return view('produits.produits_all', ['produits' => $produits]);
    }
    public function details($id)
    {
        $produit = Produit::find($id);
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
    public function details_posts(Request $request)
    {
        $produit = Produit::find($request->id);
        $images = Images::where('produit_id', $request->id)->get();
        return response()->json([
            'produit' => $produit,
            'images' => $images
        ]);
    }
    public function contact()
    {
        return view('site.contact');
    }
    public function apropos()
    {
        $config = ConfigSite::first();
        return view('site.apropos', ['config' => $config]);
    }
    public function categories()
    {
        $categories = Categorie::join('images', 'categorie_id', 'categories.id')
            ->where('visible', '1')
            ->orwhere('visible', null)
            ->paginate(20);
        return view('site.categories', ['categories' => $categories]);
    }
}
