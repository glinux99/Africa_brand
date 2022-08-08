<?php

namespace App\Http\Controllers\Site;

use App\Models\Images;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::join('images', 'produit_id', 'produits.id')->paginate(10);
        return view('produits.produits', ['produits' => $produits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produits.nouvel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = Produit::create($request->except(['_token', 'images', 'video', 'vignette']));
        $cat = ucwords($request->categorie);
        $categorie = Categorie::where('id', $request->categorie)->first();
        // Creation d'une nouvelle categorie;
        if ($categorie == null) {
            $cat_id = Categorie::create(['name' => $cat, 'nombre_prod' => 1]);
            $imageSaveCat = new Images;
            $produit->categorie = $cat_id->id;
            $produit->save();
            $imageSaveCat->categorie_id = $cat_id->id;
            $imageSaveCat->save();
        } else {
            $imageSaveCat = Images::where('categorie_id', $categorie->id);
            $produit->categorie = $categorie->id;
            $produit->save();
            $categorie->nombre_prod = 1 + (int)$categorie->nombre_prod;
            $categorie->save();
        }
        if ($request->file('images') != '') {
            foreach ($request->file('images') as $index => $image) {
                $imageSave = new Images;
                $file = Str::random(5);
                $ext = $image->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $image->storeAs(
                    'images/produits',
                    $fileName,
                    'public'
                );
                $path2 = $image->storeAs(
                    'images/categorie',
                    $fileName,
                    'public'
                );
                $imageSave->images = $path;
                $imageSave->produit_id = $produit->id;
                $imageSaveCat->images = $path2;
                //$imageSaveCat->save();
                $imageSave->save();
            }
        } else {
            $imageSave = new Images;
            $imageSave->produit_id = $produit->id;
            $imageSave->save();
        }
        if ($request->file('video')) {
            foreach ($request->video as $index => $image) {
                $imageSave = new Images;
                $file = Str::random(5);
                $ext = $image->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $image->storeAs(
                    'videos/produits',
                    $fileName,
                    'public'
                );
                $imageSave->video = $path;
                $imageSave->produit_id = $produit->id;
                $imageSave->save();
            }
        }
        return redirect()->route('produits');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $images = Images::where('produit_id', $id)->get();
        $produit = Produit::findOrfail($id);
        $categorie = Categorie::where('name', $produit->categorie)->first();
        $categorie->nombre_prod = 1 - (int)$categorie->nombre_prod;
        if ((int)$categorie->nombre_prod <= 0) $categorie->delete();
        foreach ($images as $image) {
            Storage::disk('public')->delete($image->images);
        }
        Images::where('produit_id', $id)->delete();
    }
}
