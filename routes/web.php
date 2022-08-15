<?php

use App\Http\Controllers\Admin\AdminSiteController;
use App\Http\Controllers\Config\ConfigController;
use App\Http\Controllers\Config\NewsController;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Site\ProduitController;
use App\Http\Controllers\Site\CommandeController;
use App\Http\Controllers\Membres\ClientController;
use App\Http\Controllers\Site\CategorieController;
use App\Http\Controllers\Membres\PartenaireController;
use App\Http\Controllers\Membres\FournisseurController;
use App\Http\Controllers\Site\HomeSiteController;

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
Route::post('store-staff', [UserController::class, 'store'])->name('staff.store');
Route::get('create-staff', [UserController::class, 'create'])->name('staff.create');
Route::get('delete-staff/{id}', [UserController::class, 'destroy'])->name('staff.delete');
Route::get('profile', [UserController::class, 'profile'])->name('profile');
Route::get('update-profile', [UserController::class, 'profile_update'])->name('user.profile');
Route::post('update-profile-me', [UserController::class, 'profile_update_me'])->name('update.profile');

// Fournisseurs
Route::get('fournisseurs', [FournisseurController::class, 'index'])->name('fournisseurs');
Route::get('partenaires', [PartenaireController::class, 'index'])->name('partenaires');
Route::get('clients', [ClientController::class, 'index'])->name('clients');
Route::post('create-fournisseurs', [FournisseurController::class, 'store'])->name('fournisseurs.store');
Route::post('create-partenaires', [PartenaireController::class, 'store'])->name('partenaires.store');
Route::post('create-clients', [ClientController::class, 'store'])->name('clients.store');
Route::post('update-fournisseurs', [FournisseurController::class, 'update'])->name('fournisseurs.update');
Route::post('update-partenaires', [PartenaireController::class, 'update'])->name('partenaires.update');
Route::post('update-clients', [ClientController::class, 'update'])->name('clients.update');
Route::get('delete-fournisseur/{id}', [FournisseurController::class, 'destroy'])->name('fournisseurs.delete');
Route::get('delete-partenaire/{id}', [PartenaireController::class, 'destroy'])->name('partenaires.delete');
Route::get('detete-client/{id}', [ClientController::class, 'destroy'])->name('clients.delete');
Route::post('add-fournisseur', [FournisseurController::class, 'edit'])->name('fournisseurs.edit');
// Route::get('register', [ClientController::class, 'index'])->name('clients');
Route::get('creation-produit', [ProduitController::class, 'create'])->name('produit');
Route::get('all-produit', [ProduitController::class, 'index'])->name('produits');
Route::post('create-produit', [ProduitController::class, 'store'])->name('produit.store');
Route::get('delete-produit/{id}', [ProduitController::class, 'destroy'])->name('produit.delete');
Route::get('all-categories', [CategorieController::class, 'index'])->name('categories');
Route::get('/produitCategorie', [CategorieController::class, 'create'])->name('categories.exists');
Route::post('/modifier-Categorie', [CategorieController::class, 'update'])->name('categories.update');
Route::post('/Categorie-modifier', [CategorieController::class, 'edit'])->name('categories.update.call');
Route::post('/detail', [CategorieController::class, 'edit'])->name('categories.details');
Route::get('commade', [CommandeController::class, 'index'])->name('commades');
Route::get('/', [HomeSiteController::class, 'index'])->name('index');
Route::get('/produit', [HomeSiteController::class, 'produit'])->name('home.produit');
Route::get('/details-produit/{id}', [HomeSiteController::class, 'details'])->name('produit.details');
Route::post('/details-produits', [HomeSiteController::class, 'details_posts'])->name('produit.details.post');
Route::get('/contact', [HomeSiteController::class, 'contact'])->name('contact');
Route::get('/categories', [HomeSiteController::class, 'categories'])->name('categories.all');
Route::get('/admin', [AdminSiteController::class, 'index'])->name('admin.site');
Route::get('/actualite', [NewsController::class, 'index'])->name('news.all');
Route::get('/configuration-de-news', [NewsController::class, 'index_config'])->name('news.config');
Route::post('/creation-de-news', [NewsController::class, 'store'])->name('news.config.store');
Route::get('/details-de-news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('apropos', [HomeSiteController::class, 'apropos'])->name('apropos');
Route::get('/autres-config', [ConfigController::class, 'autres_index'])->name('autres.config');
Route::post('/autres-update-config', [ConfigController::class, 'autres_index_update'])->name('autres.config.update');
Route::get('/apropos-config', [ConfigController::class, 'apropos_index'])->name('apropos.config');
Route::get('/update-config', [ConfigController::class, 'apropos_index'])->name('apropos.config.update');
Auth::routes();



// Essaies
// Route::get('/test/{id}', [CategorieController::class, 'show'])->name('categories.details');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
