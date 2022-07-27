<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::find(1);
        //$user->assignRole('admin');
        //$user->attachRole('admin');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->roles->first()->name == 'admin') return redirect()->route('admin');
            if (Auth::user()->roles->first()->name == 'client') return redirect()->route('index');
            echo 'coool';
        } else return redirect()->route('login');
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
        if ($request->notificable) $notificable = $request->notificable;
        else $notificable = false;
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->numero = $request->numero;
        $user->password = Hash::make($request['password']);
        $user->notificable = $notificable;
        $user->save();
        if ($user->id == 1) {
            $user->assignRole('admin');
            $user->save();
        } else {
            $user->assignRole('client');
            $user->save();
        }
        Auth::login($user, true);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
