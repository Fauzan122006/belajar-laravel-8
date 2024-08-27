<?php

use App\Http\Controllers\DaftarSiswaController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
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



Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "user" => "fauzan",
        "school"  => "SMK INFORMATIKA KOMPUTER AMPANA KOTA"
    ]); 
});

Route::get('/daftarsiswa', [DaftarSiswaController::class, 'index']);

Route::get('/blog', [PostController::class, 'index']);


// halaman single blog

Route::get('blog/{post:slug}', [PostController::class, 'show']);

// Categories
Route::get('/categories', function(Category $category) {
    return view('categories', [
        'title' => 'Category Post',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});