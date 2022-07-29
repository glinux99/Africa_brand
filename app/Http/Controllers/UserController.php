<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Images;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::role(['client'])->paginate(20);
        $users = User::join('images', 'imagesprofile_id', 'users.id')->role(['client'])->paginate(20);
        return view('users.all_users', ['users' => $users]);
    }
    public function afficheprofile()
    {
        return view('users.alter_profile');
    }
    public function profile()
    {
        return view('users.profile');
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
    public function update_me(Request $request)
    {
        if ($request->password == "") $password = Auth::user()->password;
        else $password = $request->password;
        $user = User::find(Auth::user()->id);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = $password;
        $user->numero = request('numero');
        $user->notificable = request('notificable');
        $user->description = request('description');
        $user->save();
        $id = Auth::user()->id;
        if ($request->images) {
            $images = $request->file('images');
            $imageSave = Images::where('imagesprofile_id', $id)->first();
            $file = Str::random(5);
            $ext = $images->getClientOriginalExtension();
            $fileName = $file . '.' . $ext;
            $path = $images->storeAs(
                'images/users',
                $fileName,
                'public'
            );

            // Suppression de l ancienne image
            try {
                $image = Images::where('imagesprofile_id', $id)->first();
                Storage::disk('public')->delete($image->images);
            } catch (Exception $exc) {
            }
            $imageSave->images = $path;
            $imageSave->imagesprofile_id = $id;
            $imageSave->save();
            $images = Images::where('imagesprofile_id', Auth::user()->id)->first();
            Session::put('picprofile', 'storage/' . $images->images);
        }
        return redirect()->route('profile');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $image = Images::where('imagesprofile_id', $id);
            Storage::disk('public')->delete($image->images);
        } catch (Exception $exc) {
        }
        User::find($id)->delete();
        return \redirect()->route('user.all');
    }
}
