<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\SelectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('add-impot', [ImpotController::class, 'store'])->name('add.impot');
Route::get('delete-impot/{id}', [ImpotController::class, 'destroy'])->name('delete.impot');
Route::post('register/Client', [ClientController::class, 'store'])->name('register.client');
Route::post('/login/client', [ClientController::class, 'index'])->name('login.client');
Route::post('/store-produit', [ProduitsController::class, 'store'])->name('store.produits');
Route::get('/creation-produit', [ProduitsController::class, 'index'])->name('create.produit');
Route::get('/produitCategorie', [SelectController::class, 'categorie']);
Route::get('/login-client', function () {

    $roles = Auth::user()->roles->first()->name;
    echo $roles;
});
Route::get('/profile', function () {
    return view('users.profile');
});
Route::get('/taxes', function () {
    return view('taxes.taxe');
});

Route::get('/details', function () {
    return view('produits.details');
});
Route::get('/', function () {
    return view('acceuil');
})->name("index");
Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin')->middleware('auth');
Route::get('/offre', function () {
})->name("offre");
Route::get('/blog', function () {
})->name("blog");
Route::get('/marque', function () {
})->name("marque");
Route::get('/categorie', function () {
})->name("categorie.all");
Route::get('/vendeur', function () {
})->name("vendeur.all");
Route::get('/reduce', function () {
})->name("reduction");
Route::get('/', function () {
    return view('acceuil');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
