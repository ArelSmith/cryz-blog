<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
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
    return view('home', [
        'title' => 'Home',
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "active" => "about",
        "name" => "Arel Smith",
        "email" => "wonderfulofgame@gmail.com",
        "img" => "profile.png",
        'title' => "About"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
