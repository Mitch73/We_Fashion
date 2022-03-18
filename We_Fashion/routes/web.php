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

// page d'acceuil et le nom de la route 'sold
Route::get('/', [ProductController::class, 'index'])->name('sold');

// Route vers la page d'un produit unique et le nom de la route 'showproduct
Route::get('showproduct/{id}', [ProductController::class, 'product'])->name('showproduct');

// vous pouvez faire du binding avec le modèle id => instance de la classe Category
// les routes sont avec paramètre (id de la category à afficher )
// le nom de la route 'sex
Route::get('/sex/{name}/', [ProductController::class, 'showSex'])->name('sex');

/**Route pour la partie admin */
// page admin
Route::resource('product', AdminController::class, ['as' => 'product'])->middleware('auth');