<?php

namespace App\Http\Controllers;

use App\Models\select;
use App\Models\Produits;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
                $file = Str::random(5);
                $ext = $image->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $image->storeAs(
                    'images/produits',
                    $fileName,
                    'public'
                );
                $pathImage = "image" . ($index + 1);
                $produit->$pathImage = $path;
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
