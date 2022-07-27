<?php

namespace App\Http\Controllers;

use App\Models\select;

use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function categorie(Request $request)
    {
        $data = [];

        if ($request->input('q')) {
            $search = $request->q;
            $data = select::select("id", "categorie")
                ->where('categorie', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($data);
    }
    public function marque(Request $request)
    {
        $data = [];

        if ($request->input('q')) {
            $search = $request->q;
            $data = select::select("id", "marque")
                ->where('marque', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($data);
    }
    public function unite(Request $request)
    {
        $data = [];

        if ($request->input('q')) {
            $search = $request->q;
            $data = select::select("id", "unite")
                ->where('unite', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($data);
    }
    public function fournisseur_video(Request $request)
    {
        $data = [];

        if ($request->input('q')) {
            $search = $request->q;
            $data = select::select("id", "categorie")
                ->where('categorie', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($data);
    }
}
