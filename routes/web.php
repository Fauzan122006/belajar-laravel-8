<?php

use App\Http\Controllers\DaftarSiswaController;
use App\Http\Controllers\PostController;
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

Route::get('blog/{slug}', [PostController::class, 'show']);