<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;

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

Route::get('/', function () {
    $products = config('db.comics');
    // dd($products);
    return view('home');
})->name('home');

Route::get('/comics/{id}', function ($id) {
    $products = config('db.comics');

    if ($id >= 0 && $id < count($products)) {
        $product = $products[$id];
         return view('comics.show', compact('product'));
    } else {
        abort(404);
    }
})->name('comics.show');

Route::resource('comics', ComicController::class);

