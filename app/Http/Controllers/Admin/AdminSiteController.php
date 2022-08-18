<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produit = Produit::count();
        $categorie = Categorie::count();
        $user = User::count();
        $vente = Commande::where('status', '1')->count();
        $attentes = Commande::where('status', '0')->count();
        $totalVentes = Commande::count();
        $dataCategorie = array();
        $donne = Categorie::all();
        foreach ($donne as $data) {
            array_push($dataCategorie, $data->name);
        }
        $produits = Produit::join('images', 'produit_id', 'produits.id')->groupBy('produit_id')->paginate(20);
        $data = array(
            "ventes" =>
            $vente,
            "produit" => $produit,
            "categorie" => $categorie,
            'membre' => $user,
            'attentes' => $attentes,
            'totalVentes' => $totalVentes
        );
        // dd($dataCategorie);
        return view('admin.admin', ['produits' => $produits, 'data' => $data, 'dataCategorie' => $dataCategorie]);
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
        //
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
