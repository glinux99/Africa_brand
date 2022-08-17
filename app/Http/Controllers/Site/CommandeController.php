<?php

namespace App\Http\Controllers\Site;

use App\Models\Chariot;
use App\Models\Commande;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes = Commande::join('users', 'users.id', 'commandes.users_id')->get();
        return view('produits.demande', ['commande' => $commandes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $commande = Commande::where('users_id', Auth::user()->id)
            ->join('produits', 'produits.id', 'produit_id')
            ->select('produits.*', 'commandes.*', 'commandes.qte AS commande_qte')
            ->get();
        return view('site.commande_attente', ['commandes' => $commande]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chariots = Chariot::where('users_id', Auth::user()->id)->get();
        $commande_send = "african-brand-cmd-" . Str::random(8);
        foreach ($chariots as $chariot) {
            $commande = Commande::create($request->except('_token'));
            $commande->users_id = Auth::user()->id;
            $commande->qte = $chariot->qte;
            $commande->produit_id = $chariot->produit_id;
            $commande->commande_id = $commande_send;
            // $commande->status = 0;
            $commande->save();
            $chariot->delete();
        }
        return redirect()->route('produit.comande.index');
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
