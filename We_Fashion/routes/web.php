<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// page d'acceuil
Route::get('/home', [ProductController::class, 'index'])->name('sold');

// Route vers la page d'un produit unique
Route::get('/product', [ProductController::class, 'product'])->name('product');

// vous pouvez faire du binding avec le modèle id => instance de la classe Category
// les routes sont avec paramètre (id de la category à afficher )
// Route::get('/category/{category}', [ProductController::class, 'showSex'])->name('sex');
Route::get('/sex/{name}', [ProductController::class, 'showSex'])->name('sex');

/**Route pour la partie admin */
// page admin
// Route::get("admin", [ProductController::class, "admin"])->name("admin");

Route::resource('admin', AdminController::class);


// Route::get("new", [ProductController::class, "new_product"])->name("new_product");