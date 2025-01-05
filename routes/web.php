<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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
    return view('home', [
        "tittle" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "nama" => "Chocobetter",
        "email" => "choco_better@email.com",
        "img" => "img/profil.jpg"
    ]);
});
Route::get('/blog', [BlogController::class, 'index']);

// halaman single post tanpa model binding
// Route::get('blog/{slug}', [BlogController::class, 'show']);
// menggunakan model binding
Route::get('blog/{blog:slug}', [BlogController::class, 'show']);

// menampilkan semua kategori 
Route::get('/categories', function(){
    return view('categories', [
        'tittle' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

// routes untuk category berdasarkan categori yang dipilih
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'tittle' => $category->name,
        'artikel' => $category->blogs,
        'category' => $category->name
    ]);
});