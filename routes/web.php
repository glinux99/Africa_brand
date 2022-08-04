<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Membres\ClientController;
use App\Http\Controllers\Membres\PartenaireController;
use App\Http\Controllers\Membres\FournisseurController;

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
// Routes propres
Route::get('staff', [UserController::class, 'index'])->name('staff');
Route::get('store-staff', [UserController::class, 'store'])->name('staff.store');
Route::get('create-staff', [UserController::class, 'create'])->name('staff.create');
Route::get('delete-staff/{id}', [UserController::class, 'destroy'])->name('staff.delete');

// Fournisseurs
Route::get('fournisseurs', [FournisseurController::class, 'index'])->name('fournisseurs');
Route::get('partenaires', [PartenaireController::class, 'index'])->name('partenaires');
Route::get('clients', [ClientController::class, 'index'])->name('clients');
Route::post('create-fournisseurs', [FournisseurController::class, 'store'])->name('fournisseurs.store');
Route::post('create-partenaires', [PartenaireController::class, 'store'])->name('partenaires.store');
Route::post('create-clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('delete-fournisseur/{id}', [FournisseurController::class, 'destroy'])->name('fournisseurs.delete');
Route::get('delete-partenaire/{id}', [PartenaireController::class, 'destroy'])->name('partenaires.delete');
Route::get('detete-client/{id}', [ClientController::class, 'destroy'])->name('clients.delete');
Route::post('add-fournisseur', [FournisseurController::class, 'edit'])->name('fournisseurs.edit');
// Route::get('register', [ClientController::class, 'index'])->name('clients');


Route::get('creation-produit', function () {
    return view('produits.nouvel');
})->name('index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
