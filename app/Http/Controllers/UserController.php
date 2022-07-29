<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Images;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $users = User::role(['client'])->paginate(20);
        return view('users.all_users', ['users' => $users]);
    }
    public function afficheprofile()
    {
        return view('users.alter_profile');
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
        $user->save();
        if ($request->images) {
            $images = $request->file('images');
            $imageSave = new Images;
            $file = Str::random(5);
            $ext = $images->getClientOriginalExtension();
            $fileName = $file . '.' . $ext;
            $path = $images->storeAs(
                'images/users',
                $fileName,
                'public'
            );
            $imageSave->images = $path;
            $id = Auth::user()->id;
            $imageSave->imagesprofile_id = $id;
            $imageSave->save();
            // Suppression de l ancienne image
            try {
                $image = Images::where('imagesprofile_id', $id);
                Storage::disk('public')->delete($image->images);
            } catch (Exception $exc) {
            }
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
