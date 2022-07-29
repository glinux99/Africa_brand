<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\select;
use App\Models\Produits;
use App\Models\ImagesPub;
use App\Models\ImagesPub1;
use App\Models\ImagesPub2;
use Illuminate\Support\Str;
use App\Models\ImagesBottom;
use App\Models\ImagesCenter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function home_page()
    {
        return view('config.acceuil');
    }
    public function home_page_alter(Request $request)
    {
        $storage = '';
        for ($x = 1; $x < 4; $x++) {
            switch ($x) {
                case 1:
                    $data = new ImagesCenter;
                    $storage = "imagesCenter";
                    break;
                case 2:
                    $data = new ImagesPub;
                    $storage = "imagesPub";
                    break;
                case 3:
                    $data = new ImagesPub1;
                    $storage = "imagesPub1";
                    break;
                case 4:
                    $data = new ImagesPub2;
                    $storage = "imagesPub2";
                    break;
            }
            //dd($request->imagesCenter);
            if ($request->$storage) {
                foreach ($request->$storage as $image) {
                    $file = Str::random(5);
                    $ext = $image->getClientOriginalExtension();
                    $fileName = $file . '.' . $ext;
                    $path = $image->storeAs(
                        'images/' . $storage,
                        $fileName,
                        'public'
                    );
                    $data->images = $path;
                    $data->save();

                    $data = new $data;
                }
            }
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->count();
        $produits = Produits::inRandomOrder()->paginate(20);
        $produitCount = Produits::all()->count();
        $marques = select::where('marque', '!=', null)->count();
        return view('admin.admin', [
            'produits' => $produits,
            'userCount' => $users,
            'produitCount' => $produitCount,
            'marqueCount' => $marques
        ]);
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
