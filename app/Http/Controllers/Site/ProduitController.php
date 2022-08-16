<?php

namespace App\Http\Controllers\Site;

use App\Models\Images;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chariot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::join('images', 'produit_id', 'produits.id')->groupBy('produit_id')->paginate(10);
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
            $catno = false;
        } else {
            $imageSaveCat = Images::where('categorie_id', $categorie->id);
            $produit->categorie = $categorie->id;
            $produit->save();
            $categorie->nombre_prod = 1 + (int)$categorie->nombre_prod;
            $categorie->save();
            $catno = true;
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
                if (!$catno) {
                    $imageSaveCat->images = $path2;
                    $imageSaveCat->save();
                }
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
    public function cart($id)
    {
        $produit = Produit::find($id);
        $images = Images::where('produit_id', $id)->first();
        return view('site.cart', ['produit' => $produit, 'image' => $images->images]);
    }
    public function cart_info()
    {

        return view('site.cart_info');
    }
    public function cart_add(Request $request)
    {
        Chariot::create($request->only(['qte', 'produit_id', 'users_id']));
        $count = Chariot::where('users_id', Auth::user()->id)->count();
        return response()->json([
            'count' => $count
        ]);
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
        $categorie = Categorie::where('id', $produit->categorie)->first();
        $categorie->nombre_prod = 1 - (int)$categorie->nombre_prod;
        if ((int)$categorie->nombre_prod <= 0) $categorie->delete();
        foreach ($images as $image) {
            Storage::disk('public')->delete($image->images);
        }
        Images::where('produit_id', $id)->delete();

        Alert::success("Operation", "REUSSI");
        return redirect()->route('produits');
    }
}
