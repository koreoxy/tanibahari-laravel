<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home"
//     ]);
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "test",
        "desc" => "halo disini tanibahari store",
    ]);
});

Route::get('/product', [ProductController::class, 'index']);


// ROUTE SLUG SINGLE PRODUCT
Route::get('product/{product:slug}', [ProductController::class, 'show']);


Route::get('/categories', function() {
    return view ('categories', [
        'title' => 'Product Categories',
        'categories' => Category::all(),
    ]);
    
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('/category', [
        'title' => $category->name,
        'products' => $category->products,
        'categoryTitle' => $category->name,
    ]);
});
