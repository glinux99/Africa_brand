<?php

namespace App\Http\Controllers\Admin;

use App\Models\Images;
use App\Models\Annonce;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::join('images', 'annonces.id', '=', 'images.annonces_id')
            ->select('annonces.*', 'images.*', 'annonces.id as annonce_id')
            ->inRandomOrder('images.images')->paginate(20);
        return view('config.annonces.annonces_all', ['annonces' => $annonces]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.annonces.annonces');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = Annonce::create($request->except(['_token', 'images']));
        if ($request->images) {
            foreach ($request->images as $index => $image) {
                $imageSave = new Images;
                $file = Str::random(5);
                $ext = $image->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $image->storeAs(
                    'images/annonces',
                    $fileName,
                    'public'
                );
                $imageSave->images = $path;
                $imageSave->annonces_id = $produit->id;

                $imageSave->save();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce, $id)
    {
        $images = Images::where('annonces_id', $id);
        foreach ($images as $image) {
            Storage::disk('public')->delete($image);
        }
        $annonce::find($id)->delete();
        return \redirect()->route('annonces');
    }
}
