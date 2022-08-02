<?php

namespace App\Http\Controllers\Admin;

use App\Models\Images;
use App\Models\select;
use App\Models\Produits;
use Faker\Provider\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vendeur;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produits.nouvel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produits = Produits::paginate(10);
        return view('produits.produits', ['produits' => $produits]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = Produits::create($request->except(['_token', 'images', 'vignette']));
        if ($request->images) {
            foreach ($request->images as $index => $image) {
                $imageSave = new Images;
                $file = Str::random(5);
                $ext = $image->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $image->storeAs(
                    'images/produits',
                    $fileName,
                    'public'
                );
                $imageSave->images = $path;
                $imageSave->produits_id = $produit->id;

                $imageSave->save();
            }
            $produit->save();
        }
        $categorie = new select;
        if (!select::where('categorie', $request->categorie)->first()) {
            $categorie->categorie = $request->categorie;
            $categorie->save();
        }
        //Alert::toast("Le produit a ete ajoute avec succes", 'success');
        return redirect()->route('admin');
    }
    public function details($id)
    {
        $produit = Produits::find($id);
        $images = Images::where('produits_id', $id)->get();
        $produitCat = Produits::where('categorie', $produit->categorie)
            ->orWhere('marque', $produit->marque)->join('images', 'produits.id', '=', 'images.produits_id')
            ->inRandomOrder('images.images')->get()->unique('produits_id');
        $produitvendu = Produits::join('images', 'produits.id', '=', 'images.produits_id')
            ->inRandomOrder('images.images')->get()->unique('produits_id');
        //$vendeur = Vendeur::where('produit_id', $id);
        $vendeur = ['name' => "AFRICAN BRAND"];
        return view('produits.details', ['produit' => $produit, 'produitvendu' => $produitvendu, 'images' => $images, 'produitCat' => $produitCat, 'vendeur' => $vendeur]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function show(Produits $produits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function edit(Produits $produits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produits $produits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produits $produits)
    {
        //
    }
}
