<?php

namespace App\Http\Controllers\Membres;

use App\Models\User;
use App\Models\Images;
use App\Models\Membre;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Membre::where('type', 'fournisseurs')->join('images', 'membres.id', 'membre_id')
            ->select('membres.*', 'membres.id AS membre_id', 'images.*')->paginate(10);
        return view('users.ClientPartenairesFournisseurs.fournisseurs', ['users' => $users]);
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
        $type = "fournisseurs";
        $mbr = Membre::create($request->except(['_token', 'images', 'documents', 'type']));
        $mbr->type = $type;
        if ($request->file('images')) {
            foreach ($request->file('images') as $index => $image) {
                $imageSave = new Images;
                $file = Str::random(5);
                $ext = $image->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $image->storeAs(
                    'images/' . $type,
                    $fileName,
                    'public'
                );
                $imageSave->images = $path;
                $imageSave->membre_id = $mbr->id;
                $imageSave->save();
            }
        }
        if ($request->documents) {
            foreach ($request->documents as $index => $image) {
                $imageSave = new Images;
                $file = Str::random(5);
                $ext = $image->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $image->storeAs(
                    'documents/' . $type,
                    $fileName,
                    'public'
                );
                $imageSave->documents = $path;
                $imageSave->fournisseur_id = $mbr->id;
                $imageSave->save();
            }
        }
        $mbr->save();
        return redirect()->route($type);
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
    public function edit(Request $request)
    {
        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
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
        $images = Images::where('membre_id', $id);
        foreach ($images as $image) {
            Storage::disk('public')->delete($image->images);
        }
        Membre::find($id)->delete();
        return \redirect()->route('fournisseurs');
    }
}
