<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Images\Images;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Vendor\Vendeur;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Site\ClientController;
use App\Http\Controllers\Images\ImageController;
use App\Http\Controllers\Admin\AnnonceController;
use App\Http\Controllers\Site\HomeSiteController;
use App\Http\Controllers\Admin\ProduitsController;

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
Route::get('/produit-details/{id}', [ProduitsController::class, 'details'])->name('detail.produits');
Route::group(['middleware' => 'auth'], function () {
    Route::post('/store-produit', [ProduitsController::class, 'store'])->name('store.produits');
    Route::get('/creation-produit', [ProduitsController::class, 'index'])->name('create.produit');
    Route::get('/produit-all', [ProduitsController::class, 'create'])->name('create.produits');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/configuration-home-page', [AdminController::class, 'home_page'])->name('home.page');
    Route::post('/configuration-home-page-alter', [AdminController::class, 'home_page_alter'])->name('home.page.alter');
    Route::get('/annonces', [AnnonceController::class, 'index'])->name('annonces');
    Route::get('/create-annonces', [AnnonceController::class, 'create'])->name('create.annonces');
    Route::post('/add-annonces', [AnnonceController::class, 'store'])->name('add.annonces');
    Route::get('/delete-annonces/{id}', [AnnonceController::class, 'destroy'])->name('delete.annonces');
    Route::get('/delete-images/{id}', [ImageController::class, 'destroy'])->name('delete.images');
    Route::get('/user-all', [UserController::class, 'index'])->name('user.all');
    Route::get('/alter-profile', [UserController::class, 'afficheprofile'])->name('user.profile');
    Route::post('/update-profile', [UserController::class, 'update_me'])->name('update.profile');
    Route::get('/delete-user/{id}', [UserController::class, 'destroy'])->name('delete.user');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/vendeur', [Vendeur::class, 'index']);
});
Route::get('/produitCategorie', [SelectController::class, 'categorie']);
Route::get('/produitMarque', [SelectController::class, 'marque']);


Route::get('/login-client', function () {

    // $roles = Auth::user()->roles->first()->name;
    // echo $roles;

});
Route::get('/taxes', function () {
    return view('taxes.taxe');
});

Route::get('/details', function () {
    return view('produits.details');
});

Route::get('/', [HomeSiteController::class, 'index'])->name('index');

Route::get('/detail', function () {
    return view('produits.details');
})->name("details");
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
Route::get('/links', function () {
    Artisan::call('migrate:refresh --seed');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
