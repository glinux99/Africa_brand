<?php

namespace App\Http\Controllers;

use App\Models\Select;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function categorie(Request $request)
    {
        $data = [];

        if ($request->has('q')) {
            $search = $request->q;
            $data = Select::select("id", "categorie")
                ->where('categorie', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($data);
    }
}
