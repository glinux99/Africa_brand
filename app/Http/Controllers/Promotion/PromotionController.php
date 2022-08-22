<?php

namespace App\Http\Controllers\Promotion;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Promotion;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Produit::join('images', 'images.produit_id', 'produits.id')
            ->join('promotions', 'promotions.produit_id', 'produits.id')
            ->select('produits.*', 'images.*', 'promotions.*', 'promotions.prix AS promotion_reduction', 'promotions.produit_id AS produit_promotion_id')->get();
        $produits = Produit::join('images', 'produit_id', 'produits.id')->groupBy('produit_id')->paginate(10);
        return view('produits.promotion', ['produits' => $produits, 'promotions' => $promotions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Promotion::create($request->except("_token"));
        $produits = Produit::where('id', $request->produit_id);
        $produits->update(['remise' => $request->prix]);
        Session()->put('alert-session', "promotion-save");
        return redirect()->route('promition.produit.index');
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
        //
    }
}
